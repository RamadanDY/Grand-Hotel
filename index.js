"use strict";
console.log(document.querySelector(".year").textContent);

document.querySelector(".year").textContent = "2024";

// console.log((document.querySelector(".footer-input").value = "rama"));

// document.querySelector(".footer-btn").addEventListener("click", function () {
//   console.log(document.querySelector(".footer-input").value);
// });
/////// comment the lines 13 to 17

// const nepa = (document.querySelector(".about-us-paragraph").textContent =
//   "name");
// nepa.addEventListener("click", function () {
//   const done = "the new age";
// });
const name =

const aboutbtn = document.querySelector(".about-us-btn");
const textch = document.querySelector(".about-us-paragraph");
const change = document.querySelector(".about-us");

aboutbtn.addEventListener("click", function () {
  textch.textContent = "new shit bruhv";
  change.style.backgroundColor = "oldlace";
});

//////lets move to the next js functionality i want to implement

///////changing the background of the about-us when the button is clicked
const number = Math.random();
console.log(number);
// document.querySelector("about-us").computedStyleMap.backgroundColor = "#60b347";
