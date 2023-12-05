const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const headerButton = document.querySelector(".header-button");
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
  autoHeight: true,
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

// Blog page slider
const swiperBlogPage = new Swiper(".blog-page-slider", {
  speed: 400,
  autoHeight: false,
  slidesPerView: 2,
  grid: {
    rows: 5,
  },
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    type: "bullets",
    renderBullet: function (index, className) {
      return `<span class="${className}">${index + 1}</span>`;
    },
    bulletActiveClass: "pagination-bullet-active",
    bulletClass: "pagination-bullet",
  },
});

let currentModal; // Current modal window
let modalDialog; // White dialog window
let alertModal = document.querySelector("#alert-modal"); // Window with alert
const modalButtons = document.querySelectorAll("[data-toggle=modal]"); // Switchers for modal windows

//Modal window open/close
modalButtons.forEach((button) => {
  /*Catch event click*/
  button.addEventListener("click", (event) => {
    event.preventDefault(); // Decline default behavior
    /*Clarify wich window is open*/
    currentModal = document.querySelector(button.dataset.target);
    /*Open current window */
    currentModal.classList.toggle("is-open");
    /*Assign dialog window */
    modalDialog = currentModal.querySelector(".modal-dialog");
    /*Tracking clicks to the window and outside */
    currentModal.addEventListener("click", (event) => {
      /*If click outside the window */
      if (!event.composedPath().includes(modalDialog)) {
        /*Close dialog window */
        currentModal.classList.remove("is-open");
      }
    });
  });
});

// Close modal windows by keybord
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    currentModal.classList.toggle("is-open");
  }
});

const forms = document.querySelectorAll("form"); //Collect all forms
forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  // apply rules to form fields
  validation
    .addField("[name=username]", [
      {
        rule: "required",
        errorMessage: "Укажите имя",
      },
      {
        rule: "maxLength",
        value: 30,
        errorMessage: "Максимально 30 символов",
      },
    ])
    .addField("[name=userphone]", [
      {
        rule: "required",
        errorMessage: "Укажите телефон",
      },
      {
        rule: "maxLength",
        value: 20,
        errorMessage: "Максимально 20 символов",
      },
    ])
    .onSuccess((event) => {
      const thisForm = event.target; // форма
      const formData = new FormData(thisForm); // Данные из формы
      const ajaxSend = (formData) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,
        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            console.log(currentModal);
            currentModal.classList.remove("is-open");
            alertModal.classList.add("is-open");
            currentModal = alertModal;
            modalDialog = currentModal.querySelector(".modal-dialog");
            currentModal.addEventListener("click", (event) => {
              if (!event.composedPath().includes(modalDialog)) {
                currentModal.classList.remove("is-open");
              }
            });
          } else {
            alert(response.statusText);
          }
        });
      };
      ajaxSend(formData);
    });
});
