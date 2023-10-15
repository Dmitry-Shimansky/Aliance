const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo";
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo-light";
};

// open menu function
const openMenu = (event) => {
  menu.classList.add("is-open"); //add class "is-open" to the "mobile-menu class"
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden"; //Forbid site scrolling
  lightModeOn();
};
// close menu function
const closeMenu = (event) => {
  menu.classList.remove("is-open"); //Remove class "is-open" from the "mobile-menu class"
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = ""; //Get back site scrolling
  lightModeOff();
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
});
mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});
