const open_navbar = document.querySelector(".open_navbar");
const navbar = document.querySelector(".navigation");
const close_button = document.querySelector(".close_nav");

open_navbar.addEventListener("click", function () {
    navbar.classList.toggle("show");
});
close_button.addEventListener("click", function () {
    navbar.classList.toggle("show");
});
