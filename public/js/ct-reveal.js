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

effect.reveal(".social-one", {
    delay: 200,
    origin: "left",
});
effect.reveal(".social-two", {
    delay: 200,
    origin: "left",
});
effect.reveal(".social-three", {
    delay: 200,
    origin: "rigth",
});
effect.reveal(".social-four", {
    delay: 200,
    origin: "right",
});

//-------------------------------

effect.reveal(".form-image", {
    delay: 200,
    origin: "top",
});
effect.reveal(".form-ct", {
    delay: 200,
    origin: "right",
});
// effect.reveal(".contact-form", {
//     delay: 200,
//     origin: "right",
// });


