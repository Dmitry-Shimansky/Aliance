const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const headerButton = document.querySelector(".header-button");
const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");
const isFront = document.body.classList.contains("front-page");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  // logo.style.display = "block";
  // logoLight.style.display = "none";
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  // logo.style.display = "none";
  // logoLight.style.display = "block";
};

const changeNavHeight = (height) => {
  navbar.style.height = height;
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
  this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
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
  navigation: {
    nextEl: ".second-slider-button-next",
    prevEl: ".second-slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 576px
    620: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    860: {
      slidesPerView: 2,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 3,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 4,
    },
  },
});

// Blog slider
const swiperBlog = new Swiper(".blog-slider", {
  // Optional parameters
  speed: 400,
  autoHeight: true,
  direction: "horizontal",
  spaceBetween: 30,
  slidesPerView: 1,
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 1,
    },
    // // when window width is >= 900px
    900: {
      slidesPerView: 2,
    },
  },
});

//Modal window open/close
document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) &&
      modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
});
