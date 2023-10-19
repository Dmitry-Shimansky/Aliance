const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const headerButton = document.querySelector(".header-button");

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

// Header slider
const swiper = new Swiper("#swiper1", {
  // Optional parameters
  speed: 400,
  autoHeight: true,
  direction: "horizontal",
  slidesPerView: 1,
  // Navigation arrows
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 5,
    },
  },
});

// Second slider
const secondSwiper = new Swiper("#swiper2", {
  // Optional parameters
  speed: 400,
  autoHeight: false,
  direction: "horizontal",
  slidesPerView: 1,
  slidesOffsetAfter: -50,
  slidesOffsetBefore: 30,
  navigation: {
    nextEl: ".second-slider-button-next",
    prevEl: ".second-slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 5,
    },
  },
});
