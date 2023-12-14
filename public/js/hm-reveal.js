
const effect = ScrollReveal({
    delay: 375,
    duration: 500,
    reset: true
});
const effectE = ScrollReveal({
    distance: "200px",
    duration: 1000,
    delay: 100,
    reset: true,
});
const effectM = ScrollReveal({
    distance: "20px",
    duration: 2000,
    delay: 300,
    reset: true,
});

effectE.reveal(".section-title");

effect.reveal(".hero-description", {
    delay: 200,
    origin: "bottom",
});

effectE.reveal(".button-hero", {
    delay: 200,
    origin: "bottom",
});

effect.reveal(".section-buttonT", {
    delay: 200,
    origin: "bottom",
});

effectE.reveal(".hero-image", {
    delay: 200,
    origin: "right",
});

effectE.reveal(".ArrowFloat", {
    delay: 200,
    origin: "bottom",
});



effect.reveal(".box-1 ", {
    delay: 200,
    origin: "bottom",
});
effect.reveal(".box-2", {
    delay: 500,
    origin: "bottom",
});
effect.reveal(".box-3", {
    delay: 800,
    origin: "bottom",
});
effect.reveal(".box-4", {
    delay: 1200,
    origin: "bottom",
});


effect.reveal("#one", {
    delay: 200,
    origin: "bottom",
});
var slideUp = {
    distance: '150%',
    origin: 'bottom',
    opacity: null,
    reset: false,
};

ScrollReveal().reveal('.home-about-text', slideUp);

// ----------------------
// effect.reveal(".home-about-text", {
//     delay: 200,
//     origin: "left",
// });

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
