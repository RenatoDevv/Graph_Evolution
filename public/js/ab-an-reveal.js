const effect = ScrollReveal({
    distance: "100px",
    duration: 3000,
    delay: 300,
    reset: true,
});
const effectM = ScrollReveal({
    distance: "50px",
    duration: 2000,
    delay: 300,
    reset: true,
});

effect.reveal(".content-title", {
    delay: 200,
    origin: "left",
});
effectM.reveal(".content-description", {
    delay: 200,
    origin: "top",
});
effect.reveal(".content-image", {
    delay: 200,
    origin: "left",
});

//-------------------------------
// About Biografi

effect.reveal(".aboout-title-b", {
    delay: 200,
    origin: "left",
});
effect.reveal(".about-description", {
    delay: 200,
    origin: "bottom",
});

//-----------------------------
// About Grah


effect.reveal(".aboout-content", {
    delay: 200,
    origin: "left",
});


effect.reveal(".about-title", {
    delay: 200,
    origin: "top",
});
effect.reveal(".on-box", {
    delay: 200,
    origin: "left",
});
effect.reveal(".tw-box", {
    delay: 200,
    origin: "bottom",
});
effect.reveal(".tr-box", {
    delay: 200,
    origin: "left",
});
effect.reveal(".fr-box", {
    delay: 200,
    origin: "bottom",
});
