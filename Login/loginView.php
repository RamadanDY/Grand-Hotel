<?php 
require "../config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="../CSS/login.css" />
</head>

<body>
    <div class="login-container">
        <div class="login-page">
            <form method="post" action="../login.php">
                <div class="heading-text">
                    <h3>Welcome To The Family</h3>
                </div>

                <div class="user-wrapper">
                    <label for="fname" class="user-heading">Username:</label><br>
                    <input type="text" name="username" class="login-input" placeholder="Enter Username" autocomplete="off"/>
                </div>

                <div class="password-wrapper">
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" class="login-password" placeholder="Enter Password" />
                </div>
                
                <div class="submitbtn-wrapper">
                    <input type="submit" value="Submit" class="login-btn" />
                </div>

                <a href=""></a>
            </form>
        </div>
    </div>
</body>

</html>