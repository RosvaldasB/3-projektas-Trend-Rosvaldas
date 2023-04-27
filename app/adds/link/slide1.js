// 1 slider

var slider = tns({
    container: '.slider',
    items: 4,
    center: true,
    navContainer: true,
    swipeAngle: false,
    speed: 400,
    nav: false,
    fixedWidth: 400,
    autoplayButtonOutput: false,
    autoplay: true,
    controlsContainer: ".controls",
    prevButton: ".prevBtn",
    nextButton: ".nextBtn",
    responsive: {
        980: {
            items: 3
        },
        460: {
            items: 3
        },
    },
});