const effect = ScrollReveal({
    distance: "100px",
    duration: 3000,
    delay: 300,
    reset: false,
});
const effectM = ScrollReveal({
    distance: "20px",
    duration: 2000,
    delay: 300,
    reset: false,
});

effect.reveal(".services-title", {
    delay: 200,
    origin: "top",
});
effect.reveal(".services-subtitle", {
    delay: 200,
    origin: "top",
});
effect.reveal(".services-description", {
    delay: 200,
    origin: "top",
});

effectM.reveal(".srv-card-tw", {
    delay: 100,
    origin: "left",
});
