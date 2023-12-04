const effect = ScrollReveal({
    distance: "100px",
    duration: 3000,
    delay: 300,
    reset: false,
});
const effectM = ScrollReveal({
    distance: "50px",
    duration: 2000,
    delay: 300,
    reset: false,
});

effect.reveal(".container-image", {
    delay: 200,
    origin: "left",
});
effect.reveal(".container_404_info", {
    delay: 200,
    origin: "bottom",
});
