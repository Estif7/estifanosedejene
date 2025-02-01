'use strict';


document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll('.card');

  cards.forEach(card => {
    const smallImages = card.querySelectorAll('.small-image');
    const mainImage = card.querySelector('.main-image');
    const scrollContainer = card.querySelector('.small-images'); // Get the scroll container for this specific card
    const navButtons = card.querySelectorAll('.nav-button'); // Get navigation buttons for this specific card

    smallImages.forEach(smallImage => {
      smallImage.addEventListener('click', function () {
        // Swap src attributes
        const smallImg = smallImage.querySelector('img');
        const tempSrc = mainImage.src;
        mainImage.src = smallImg.src;
        smallImg.src = tempSrc;
      });
    });

    // Add event listeners for navigation buttons
    navButtons.forEach(button => {
      button.addEventListener('click', () => {
        const direction = button.classList.contains('left') ? -1 : 1;
        scrollContainer.scrollBy({
          left: 140 * direction,
          behavior: 'smooth'
        });
      });
    });

    // Add modal functionality
    const modal = document.querySelector('.modal');
    const modalContent = document.querySelector('.modal-content');
    const closeModal = document.querySelector('.close');

    // Open modal
    card.querySelector('.main-image-container').addEventListener('click', () => {
      const imgSrc = mainImage.src;
      modal.style.display = 'block';
      document.body.style.overflow = 'hidden'; // Prevent body from scrolling

      // Dynamically load image to get its dimensions
      const img = new Image();
      img.src = imgSrc;
      img.onload = () => {
        const imgWidth = img.width;
        const imgHeight = img.height;
        const viewportWidth = window.innerWidth;
        const viewportHeight = window.innerHeight;

        // Calculate scale factor to fit image within viewport
        const scaleFactor = Math.min(viewportWidth / imgWidth, viewportHeight / imgHeight);

        // Adjust modal content size
        modalContent.innerHTML = `<img src="${imgSrc}" alt="Zoomed Image">`;
        modalContent.style.width = `${imgWidth * scaleFactor}px`;
        modalContent.style.height = `${imgHeight * scaleFactor}px`;
      };
    });

    // Close modal
    closeModal.addEventListener('click', () => {
      modal.style.display = 'none';
      document.body.style.overflow = 'auto'; // Restore body scrolling
    });
    
    window.addEventListener('click', (e) => {
      if (e.target === modal) {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto'; 
      }
    });
  });
});



// element toggle function
const elementToggleFunc = function (elem) { elem.classList.toggle("active"); }


// sidebar variables
const sidebar = document.querySelector("[data-sidebar]");
const sidebarBtn = document.querySelector("[data-sidebar-btn]");

// sidebar toggle functionality for mobile
sidebarBtn.addEventListener("click", function () { elementToggleFunc(sidebar); });


// testimonials variables
const testimonialsItem = document.querySelectorAll("[data-testimonials-item]");
const modalContainer = document.querySelector("[data-modal-container]");
const modalCloseBtn = document.querySelector("[data-modal-close-btn]");
const overlay = document.querySelector("[data-overlay]");

// modal variable
const modalImg = document.querySelector("[data-modal-img]");
const modalTitle = document.querySelector("[data-modal-title]");
const modalText = document.querySelector("[data-modal-text]");

// modal toggle function
const testimonialsModalFunc = function () {
  modalContainer.classList.toggle("active");
  overlay.classList.toggle("active");
}

// add click event to all modal items
for (let i = 0; i < testimonialsItem.length; i++) {

  testimonialsItem[i].addEventListener("click", function () {

    modalImg.src = this.querySelector("[data-testimonials-avatar]").src;
    modalImg.alt = this.querySelector("[data-testimonials-avatar]").alt;
    modalTitle.innerHTML = this.querySelector("[data-testimonials-title]").innerHTML;
    modalText.innerHTML = this.querySelector("[data-testimonials-text]").innerHTML;

    testimonialsModalFunc();

  });

}

// add click event to modal close button
modalCloseBtn.addEventListener("click", testimonialsModalFunc);
overlay.addEventListener("click", testimonialsModalFunc);



// custom select variables
const select = document.querySelector("[data-select]");
const selectItems = document.querySelectorAll("[data-select-item]");
const selectValue = document.querySelector("[data-selecct-value]");
const filterBtn = document.querySelectorAll("[data-filter-btn]");

select.addEventListener("click", function () { elementToggleFunc(this); });

// add event in all select items
for (let i = 0; i < selectItems.length; i++) {
  selectItems[i].addEventListener("click", function () {

    let selectedValue = this.innerText.toLowerCase();
    selectValue.innerText = this.innerText;
    elementToggleFunc(select);
    filterFunc(selectedValue);

  });
}

// filter variables
const filterItems = document.querySelectorAll("[data-filter-item]");

const filterFunc = function (selectedValue) {

  for (let i = 0; i < filterItems.length; i++) {

    if (selectedValue === "all") {
      filterItems[i].classList.add("active");
    } else if (selectedValue === filterItems[i].dataset.category) {
      filterItems[i].classList.add("active");
    } else {
      filterItems[i].classList.remove("active");
    }

  }

}

// add event in all filter button items for large screen
let lastClickedBtn = filterBtn[0];

for (let i = 0; i < filterBtn.length; i++) {

  filterBtn[i].addEventListener("click", function () {

    let selectedValue = this.innerText.toLowerCase();
    selectValue.innerText = this.innerText;
    filterFunc(selectedValue);

    lastClickedBtn.classList.remove("active");
    this.classList.add("active");
    lastClickedBtn = this;

  });

}



// contact form variables
const form = document.querySelector("[data-form]");
const formInputs = document.querySelectorAll("[data-form-input]");
const formBtn = document.querySelector("[data-form-btn]");

// add event to all form input field
for (let i = 0; i < formInputs.length; i++) {
  formInputs[i].addEventListener("input", function () {

    // check form validation
    if (form.checkValidity()) {
      formBtn.removeAttribute("disabled");
    } else {
      formBtn.setAttribute("disabled", "");
    }

  });
}



// page navigation variables
const navigationLinks = document.querySelectorAll("[data-nav-link]");
const pages = document.querySelectorAll("[data-page]");

// add event to all nav link
for (let i = 0; i < navigationLinks.length; i++) {
  navigationLinks[i].addEventListener("click", function () {

    for (let i = 0; i < pages.length; i++) {
      if (this.innerHTML.toLowerCase() === pages[i].dataset.page) {
        pages[i].classList.add("active");
        navigationLinks[i].classList.add("active");
        window.scrollTo(0, 0);
      } else {
        pages[i].classList.remove("active");
        navigationLinks[i].classList.remove("active");
      }
    }

  });
}