// karusele 2

var slider2 = tns({
    container: '.slider-people',
    items: 1,
    center: true,
    navContainer: true,
    swipeAngle: false,
    speed: 400,
    nav: false,
    fixedWidth: 500,
    autoplayButtonOutput: false,
    autoplay: true,
    controlsContainer: ".controls1",
    prevButton: ".prevButton",
    nextButton: ".nextButton",
    responsive: {
        '980': {
            items: 2
        },
        '460': {
            items: 1
        },
    },
});