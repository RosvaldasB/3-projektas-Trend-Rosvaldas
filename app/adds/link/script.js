function changeNav() {
    var header = document.querySelector("header");
    var scrollValue = window.scrollY;
    if (scrollValue > 780) {
        if(header.classList.contains("header-extra")) {
            return changeNav;
        } else {
            header.classList.add("header-extra");
        }
    } else {
        header.classList.add("header-extra");
    }
};

window.addEventListener('scroll', changeNav);

// rodyti bigmak

function showMenu() {
    var bmz = document.getElementById('mobile-nav');
    if (bmz.style.display == 'block') {
        bmz.style.display = 'none';
    } else {
        bmz.style.display = 'block';
    }
};

// funkcija nuvesti lankytojo vaizda iki tam tikro elemento

function scrollElement() {
    var element = document.getElementById("scrollloc");
    element.scrollIntoView();
};

// pakelti puslapi i virsu

function takeMeToTop() {
    window.scrollTo(0, 0);
};

function visibility() {
    var inputField = document.getElementById("passwordField");
    if(inputField.type === "password") {
        inputField.type = 'text';
    } else {
        inputField.type = 'password';
    }
}