<?php
require "config.php";

$username = $password = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $_SESSION["status"] = true;
        $_SESSION["message"] = "Mandatory fields are required";
        header("location:login.php");
        die();
    } else {
        
        $username = test_input($_POST["username"]);
        $password = $_POST["password"];
        // var_dump($username);die;

        $stmt = $conn->prepare("SELECT * FROM users WHERE USERNAME =:username AND PASSWORD =:password LIMIT 1");

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);

        $status = $stmt->execute();
        
        if ($status) { 
            if ($stmt->rowCount() > 0) {
                $data = $stmt->fetch(PDO::FETCH_ASSOC);

                $_SESSION["firstname"] =$data['FIRST_NAME'];
                $_SESSION["lastname"] =$data['LAST_NAME'];
                $_SESSION["username"] =$username;
                header("location:home.html");
                die();
            } else {
                $_SESSION["status"] = true;
                $_SESSION["message"] = "Login failed";
                header("location:login.view.php");
                die();
            }
        } else {
            $_SESSION["status"] = true;
            $_SESSION["message"] = $stmt->errorInfo();
            header("location:login.view.php");
            die();
        }
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
