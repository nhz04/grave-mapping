// Get the elements
const menuOpenButton = document.getElementById("menu-open-button");
const menuCloseButton = document.getElementById("menu-close-button");
const navMenu = document.querySelector(".navbar .nav-menu");
const body = document.body;

// Toggle mobile menu open/close
menuOpenButton.addEventListener("click", function() {
    body.classList.add("show-mobile-menu");
});

menuCloseButton.addEventListener("click", function() {
    body.classList.remove("show-mobile-menu");
});





