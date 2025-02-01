'use strict';



// element toggle function
const elementToggleFunc = function (elem) { elem.classList.toggle("active"); }

function scrollToAbout() {
  const aboutSection = document.getElementById('about');
  const sectionPosition = aboutSection.getBoundingClientRect().top + window.scrollY;
  const startPosition = window.scrollY;
  const distance = sectionPosition - startPosition;
  const duration = 1000; // Duration in milliseconds
  const offset = 50; // Adjust this value to set the desired space from the top
  let startTime = null;

  function animation(currentTime) {
      if (startTime === null) startTime = currentTime;
      const timeElapsed = currentTime - startTime;
      const progress = Math.min(timeElapsed / duration, 1); // Normalize progress
      const easeInOutQuad = progress < 0.5 
          ? 2 * progress * progress 
          : -1 + (4 - 2 * progress) * progress; // Easing function

      window.scrollTo(0, startPosition + distance * easeInOutQuad - offset);

      if (timeElapsed < duration) {
          requestAnimationFrame(animation);
      }
  }

  requestAnimationFrame(animation);
}


const phrases = [
  "Hi, I'm Estifanose.  ",
  "A Creative freelancer with various skills.  ",
  "I love to create and innovate.  ",
  "Let's get creative together!  "
];

let currentPhraseIndex = 0;
let currentCharIndex = 0;

const placeholderText = document.getElementById('placeholderText');
const inputField = document.getElementById('inputField');

// Add the blinking cursor dynamically
const cursor = document.createElement("span");
cursor.classList.add("cursor");
placeholderText.appendChild(cursor);

function type() {
  if (currentCharIndex < phrases[currentPhraseIndex].length) {
    placeholderText.textContent = phrases[currentPhraseIndex].substring(0, currentCharIndex); // Update text
    placeholderText.appendChild(cursor); // Ensure cursor stays after the text
    currentCharIndex++;
    setTimeout(type, 100); // Adjust speed here
  } else {
    setTimeout(deleteText, 2000); // Wait before deleting
  }
}

function deleteText() {
  if (currentCharIndex > 0) {
    placeholderText.textContent = phrases[currentPhraseIndex].substring(0, currentCharIndex - 1); // Remove characters
    placeholderText.appendChild(cursor); // Ensure cursor stays after the text
    currentCharIndex--;
    setTimeout(deleteText, 50); // Adjust speed here
  } else {
    currentPhraseIndex = (currentPhraseIndex + 1) % phrases.length; // Cycle through phrases
    setTimeout(type, 500); // Wait before typing next phrase
  }
}

// Start typing effect when the page loads
window.onload = () => {
  type();
};

// Hide placeholder when input is focused
inputField.addEventListener('focus', () => {
  placeholderText.style.display = 'none';
});

// Show placeholder again when input is blurred and empty
inputField.addEventListener('blur', () => {
  if (!inputField.value) {
    placeholderText.style.display = 'block';
    currentCharIndex = 0; // Reset typing index if needed
    placeholderText.textContent = ''; // Clear text for retyping effect
    placeholderText.appendChild(cursor); // Ensure the cursor is added back
    type();
  }
});



document.addEventListener('DOMContentLoaded', function() {
  const slider = document.querySelector('.slider-content');
  const slides = document.querySelectorAll('.testimonial-slide');
  const prevBtn = document.querySelector('.prev-btn');
  const nextBtn = document.querySelector('.next-btn');
  const dots = document.querySelectorAll('.dot');

  let currentSlide = 0;
  const totalSlides = slides.length;

  function updateSlider() {
    // Update slide position
    slider.style.transform = `translateX(-${currentSlide * 100}%)`;
    
    // Update active states
    slides.forEach(slide => slide.classList.remove('active'));
    slides[currentSlide].classList.add('active');
    
    // Update dot indicators
    dots.forEach(dot => dot.classList.remove('active'));
    dots[currentSlide].classList.add('active');
  }

  // Next slide
  nextBtn.addEventListener('click', () => {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateSlider();
  });

  // Previous slide
  prevBtn.addEventListener('click', () => {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateSlider();
  });

  // Dot navigation
  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      currentSlide = parseInt(dot.getAttribute('data-slide'));
      updateSlider();
    });
  });
});


document.addEventListener('DOMContentLoaded', function() {
  const slider = document.querySelector('.slider-content');
  const slides = document.querySelectorAll('.testimonial-slide');
  const prevBtn = document.querySelector('.prev-btn');
  const nextBtn = document.querySelector('.next-btn');
  const dots = document.querySelectorAll('.dot');

  let currentSlide = 0;
  const totalSlides = slides.length;
  const autoScrollInterval = 5000; // 5 seconds

  function updateSlider() {
    // Update slide position
    slider.style.transform = `translateX(-${currentSlide * 100}%)`;
    
    // Update active states
    slides.forEach(slide => slide.classList.remove('active'));
    slides[currentSlide].classList.add('active');
    
    // Update dot indicators
    dots.forEach(dot => dot.classList.remove('active'));
    dots[currentSlide].classList.add('active');
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateSlider();
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateSlider();
  }

  // Next slide
  nextBtn.addEventListener('click', nextSlide);

  // Previous slide
  prevBtn.addEventListener('click', prevSlide);

  // Dot navigation
  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      currentSlide = parseInt(dot.getAttribute('data-slide'));
      updateSlider();
    });
  });

  // Auto scroll functionality
  let autoScrollTimer = setInterval(nextSlide, autoScrollInterval);

  // Pause auto-scroll on hover
  const testimonialSlider = document.querySelector('.testimonial-slider');
  testimonialSlider.addEventListener('mouseenter', () => {
    clearInterval(autoScrollTimer);
  });

  testimonialSlider.addEventListener('mouseleave', () => {
    autoScrollTimer = setInterval(nextSlide, autoScrollInterval);
  });
});



document.addEventListener('DOMContentLoaded', function() {
  const slider = document.querySelector('.slider-content');
  const slides = document.querySelectorAll('.testimonial-slide');
  const prevBtn = document.querySelector('.prev-btn');
  const nextBtn = document.querySelector('.next-btn');
  const dots = document.querySelectorAll('.dot');

  let currentSlide = 0;
  const totalSlides = slides.length;
  const autoScrollInterval = 5000; // 5 seconds

  function updateSlider() {
      // Update slide position
      slider.style.transform = `translateX(-${currentSlide * 100}%)`;
      
      // Update active states
      slides.forEach(slide => slide.classList.remove('active'));
      slides[currentSlide].classList.add('active');
      
      // Update dot indicators
      dots.forEach(dot => dot.classList.remove('active'));
      dots[currentSlide].classList.add('active');
  }

  function nextSlide() {
      currentSlide = (currentSlide + 1) % totalSlides;
      updateSlider();
  }

  function prevSlide() {
      currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
      updateSlider();
  }

  // Next slide
  nextBtn.addEventListener('click', nextSlide);

  // Previous slide
  prevBtn.addEventListener('click', prevSlide);

  // Dot navigation
  dots.forEach(dot => {
      dot.addEventListener('click', () => {
          currentSlide = parseInt(dot.getAttribute('data-slide'));
          updateSlider();
      });
  });

  // Auto scroll functionality
  let autoScrollTimer = setInterval(nextSlide, autoScrollInterval);

  // Pause auto-scroll on hover
  const testimonialSlider = document.querySelector('.testimonial-slider');
  testimonialSlider.addEventListener('mouseenter', () => {
      clearInterval(autoScrollTimer);
  });

  testimonialSlider.addEventListener('mouseleave', () => {
      autoScrollTimer = setInterval(nextSlide, autoScrollInterval);
  });
});



document.getElementById("contactForm").addEventListener("submit", function (e) {
  e.preventDefault(); // Prevent default submission

  const form = e.target;
  const formData = new FormData(form);
  const messageDiv = document.getElementById("form-message");

  fetch("process_form.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      messageDiv.textContent = data; // Display success or error message
      form.reset(); // Reset the form
    })
    .catch((error) => {
      console.error("Error:", error);
      messageDiv.textContent = "Error submitting the form. Please try again.";
    });
});



const logosSlide = document.querySelector(".logos-slide");
const logosContainer = document.querySelector(".logos");

// Set the speed of the animation
const speed = 1; // pixels per millisecond

// Function to scroll the logos
function scrollLogos() {
  logosSlide.style.transform = `translateX(-${logosSlide.scrollLeft + speed}px)`;

  // Check if we've reached the end of the first set of logos
  if (logosSlide.scrollLeft >= logosSlide.scrollWidth / 2) {
    // Reset the scroll position to the start of the duplicate set
    logosSlide.style.transform = "translateX(0)";
    logosSlide.scrollLeft = 0;
  }

  // Repeat the animation
  setTimeout(scrollLogos, 16); // Approximately 60 FPS
}

// Start the animation
scrollLogos();

// Pause the animation on hover
logosContainer.addEventListener("mouseover", () => {
  clearTimeout(scrollLogos);
});

logosContainer.addEventListener("mouseout", () => {
  scrollLogos();
});




// Function to convert percentage to words
function percentToWords(percent) {
  const words = {
      '90-100': 'Excellent',
      '80-89': 'Very Good',
      '70-79': 'Good',
      '60-69': 'Fair',
      '0-59': 'Needs Improvement'
  };

  for (const range in words) {
      const [min, max] = range.split('-').map(Number);
      if (percent >= min && percent <= max) {
          return words[range];
      }
  }

  return 'Unknown';
}

// Function to update the text content
function updateTextContent() {
  // Get all elements with class "percentage-display"
  const percentageDisplays = document.querySelectorAll('.percentage-display');

  percentageDisplays.forEach((display) => {
      // Extract the percentage value
      const percentValue = parseInt(display.textContent.replace('%', ''));

      // Convert the percentage to words
      const words = percentToWords(percentValue);

      // Update the text content
      display.textContent = words;
  });
}

// Call the function to update the text content
updateTextContent();

// Function to convert percentage to words
function percentToWords(percent) {
  const words = {
      '90-100': 'Excellent',
      '80-89': 'Very Good',
      '70-79': 'Good',
      '60-69': 'Fair',
      '0-59': 'Needs Improvement'
  };

  for (const range in words) {
      const [min, max] = range.split('-').map(Number);
      if (percent >= min && percent <= max) {
          return words[range];
      }
  }

  return 'Unknown';
}

// Function to update the text content
function updateTextContent() {
  // Get all elements with class "progress-bar"
  const progressBars = document.querySelectorAll('.progress-bar');

  progressBars.forEach((bar) => {
      // Extract the percentage value from the style attribute of the child element
      const progressLine = bar.querySelector('.progress-line');
      const percentValue = parseInt(progressLine.style.maxWidth.replace('%', ''));

      // Convert the percentage to words
      const words = percentToWords(percentValue);

      // Update the text content
      const parent = bar.parentNode;
      const percentageDisplay = parent.querySelector('.percentage-display');
      if (percentageDisplay) {
          percentageDisplay.textContent = words;
      } else {
          const newDisplay = document.createElement('div');
          newDisplay.className = 'percentage-display';
          newDisplay.textContent = words;
          parent.insertBefore(newDisplay, bar);
      }
  });
}

// Call the function to update the text content
updateTextContent();




// sidebar variables
const sidebar = document.querySelector("[data-sidebar]");
const sidebarBtn = document.querySelector("[data-sidebar-btn]");

// sidebar toggle functionality for mobile
sidebarBtn.addEventListener("click", function () { elementToggleFunc(sidebar); });



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
// Navigation links and sections
const navigationLinks = document.querySelectorAll("[data-nav-link]");
const pages = document.querySelectorAll("[data-page]");

// Add click events to navigation links
navigationLinks.forEach((link) => {
  link.addEventListener("click", () => {
    const targetPage = link.getAttribute("data-nav-link");

    // Activate the corresponding page
    pages.forEach((page) => {
      if (page.getAttribute("data-page") === targetPage) {
        page.classList.add("active");
      } else {
        page.classList.remove("active");
      }
    });

    // Highlight the active navigation link
    navigationLinks.forEach((nav) => nav.classList.remove("active"));
    link.classList.add("active");
  });
});


const inputs = document.querySelectorAll(".input");
const nameDivElem = document.querySelector("#name-div");
const emailDivElem = document.querySelector("#email-div");
const phoneDivElem = document.querySelector("#phone-div");
const textDivElem = document.querySelector("#text-div");
const nameInputElem = document.querySelector("#name-input");
const emailInputElem = document.querySelector("#email-input");
const phoneInputElem = document.querySelector("#phone-input");
const textInputElem = document.querySelector("#text-input");
const submitBtn = document.querySelector('#submit-btn');

submitBtn.addEventListener('click', (event) => {

  if (nameInputElem.value.length < 1) {
    nameDivElem.classList.add('validate');
    event.preventDefault();
  }
  if (emailInputElem.value.length < 1) {
    emailDivElem.classList.add('validate');
    event.preventDefault();
  }
  if (textInputElem.value.length < 1) {
    textDivElem.classList.add('validate');
    event.preventDefault();
  }
})

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
  parent.classList.remove("validate")
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    this.value = ''
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});

phoneInputElem.addEventListener('keypress', (e) => {
  let word = e.keyCode;

  if (word < 48 || word > 57) {
    e.preventDefault();
  }
});