/* PRELOADER*/
jQuery(window).on("load", function () {
    jQuery(".tu-preloader").delay(700).fadeOut();
    jQuery(".tu-preloader_holder").delay(500).fadeOut("slow");
});

// Particles
var particle = document.getElementById("tu-particle");
if (particle !== null) {
    particlesJS("tu-particle", {
        particles: {
            number: {
                value: 10,
            },
            color: {
                value: ["#1DA1F2", "#22C55E", "#F97316"],
            },
            opacity: {
                random: true,
            },
            line_linked: {
                enable: false,
            },
            size: {
                value: 12,
                random: true,
            },
            move: {
                enable: true,
                speed: 1,
                direction: "auto",
            },
        },
    });
}

// particals
var tu_particle = document.getElementById("tu-particlev2");
if (tu_particle !== null) {
    // particles.js config
    particlesJS("tu-particlev2", {
        particles: {
            number: {
                value: 40,
            },
            color: {
                value: "#ffffff",
            },
            opacity: {
                value: 0.4,
                random: false,
            },
            size: {
                value: 12,
                random: true,
            },
            line_linked: {
                enable: false,
            },
            move: {
                enable: true,
                speed: 3,
            },
        },
        interactivity: {
            enable: false,
            detect_on: "canvas",
            events: {
                onhover: {
                    enable: false,
                    mode: "grab",
                },
                onclick: {
                    enable: false,
                    mode: "push",
                },
            },
        },
    });
}
