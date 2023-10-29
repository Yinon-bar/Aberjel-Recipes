// import scss file
import "../css/base.scss";

// Hamburger Menu
const hamburger = document.querySelector(".hamburger");
const navContainer = document.querySelector("#nav-container");
const body = document.querySelector("body");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navContainer.classList.toggle("active");
    body.classList.toggle("active");
});
