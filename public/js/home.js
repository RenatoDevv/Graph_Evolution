var button_responsive = document.getElementById("responsive-button");

var navigation_responsive = document.getElementById("navigarion_hamb");


button_responsive.addEventListener("click", () => {
    navigation_responsive.classList.add("menu_responsive");
});

// button_responsive.addEventListener("click", () => {
//     navigation_responsive.classList.remove("menu_responsive");
// });
