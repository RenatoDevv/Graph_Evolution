// button_responsive.addEventListener("click", () => {
//     navigation_responsive.classList.remove("menu_responsive");
// });

const effect = ScrollReveal({
    distance: "100px",
    duration: 3000,
    delay: 200,
    reset: true,
});
const effectE = ScrollReveal({
    distance: "300px",
    duration: 1000,
    delay: 200,
    reset: true,
});
const effectM = ScrollReveal({
    distance: "20px",
    duration: 2000,
    delay: 300,
    reset: true,
});

effectE.reveal(".home-title", {
    delay: 200,
    origin: "bottom",
});
effectE.reveal(".home-description", {
    delay: 200,
    origin: "bottom",
});
effectE.reveal(".home-link", {
    delay: 200,
    origin: "bottom",
});
effectE.reveal(".home-image", {
    delay: 200,
    origin: "top",
});

// ----------------------
effect.reveal(".home-about-text", {
    delay: 200,
    origin: "left",
});
effect.reveal(".card-one", {
    delay: 100,
    origin: "top",
});
effect.reveal(".card-two", {
    delay: 100,
    origin: "right",
});
effect.reveal(".card-three", {
    delay: 100,
    origin: "bottom",
});
effect.reveal(".card-four", {
    delay: 100,
    origin: "left",
});
//-----------------------------------
// Services

effect.reveal(".services-title", {
    delay: 100,
    origin: "top",
});
effect.reveal(".services-description", {
    delay: 100,
    origin: "top",
});
effect.reveal(".card-services-one", {
    delay: 100,
    origin: "left",
});
effect.reveal(".card-services-two", {
    delay: 100,
    origin: "left",
});
effect.reveal(".card-services-three", {
    delay: 100,
    origin: "left",
});
effect.reveal(".card-services-four", {
    delay: 100,
    origin: "left",
});

// //---------------------------------

effect.reveal(".pref-title", {
    delay: 200,
    origin: "left",
});
effect.reveal(".pref-content", {
    delay: 200,
    origin: "right",
});
