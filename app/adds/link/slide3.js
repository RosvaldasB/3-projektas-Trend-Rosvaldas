// 3 slider

var slider3 = tns({
    container: ".featured-companies-content",
    items: 2,
    center: true,
    loop: true,
    swipeAngle: false,
    speed: 400,
    nav: false,
    fixedWidth: 400,
    autoplayButtonOutput: false,
    autoplay: true,
    controlsContainer: ".controls2",
    prevButton: ".companyprevBtn",
    nextButton: ".companynextBtn",
    responsive: {
        980: {
            items: 1
        },
        460: {
            items: 1
        },
    },
});