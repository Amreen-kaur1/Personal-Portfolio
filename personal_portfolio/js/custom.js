// Spinner
window.addEventListener('load', () => {
  const loading = document.getElementById('loading');
  loading.style.display = 'none';
});

(function ($) {
  "use strict";

  // COLOR MODE
  $('.color-mode').click(function () {
    $('.color-mode-icon').toggleClass('active');
    $('body').toggleClass('dark-mode');
  });

  // HEADER
  $(".navbar").headroom();

  // OWL CAROUSEL INITIALIZATION
  $('.owl-carousel').owlCarousel({
    loop: true, // Infinite loop
    margin: 20, // Space between items
    nav: true, // Show navigation buttons
    dots: false, // Hide dots
    autoplay: true, // Enable autoplay
    autoplayTimeout: 3000, // Autoplay interval in milliseconds (3 seconds)
    items: 1,
  });

  // SMOOTHSCROLL
  $(function () {
    $('.nav-link, .custom-btn-link').on('click', function (event) {
      var $anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top - 49,
      }, 1000);
      event.preventDefault();
    });
  });

  // TOOLTIP
  $('.social-links a').tooltip();
})(jQuery);

// Resume Downloading and Separate Tab Opening
function downloadAndOpen() {
  // Create a link element for downloading
  var downloadLink = document.createElement("a");
  downloadLink.href = "amreen_kaur_resume.pdf"; // Ensure the path is correct
  downloadLink.download = "Amreen_Kaur_Resume.pdf"; // Set the download filename
  downloadLink.click(); // Trigger the download

  // Open the resume in a new tab after a short delay
  setTimeout(function() {
    window.open("amreen_kaur_resume.pdf", '_blank'); // Ensure the path is correct
  }, 500); // Delay to ensure the download starts first
}
// Form Submission Validation
function validateForm() {
  console.log("Hi");
  var name = document.getElementById("name").value.trim();
  var email = document.getElementById("email").value.trim();
  var subject = document.getElementById("subject").value.trim();
  var message = document.getElementById("message").value.trim();

  if (name == "" || email == "" || subject == "" || message == "") {
    alert("All fields must be filled out.");
    return false;
  }

  // Email validation
  var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  if (!emailPattern.test(email)) {
    alert("Please enter a valid email address.");
    return false;
  }
  return true;
}

// Dismiss Alert
function dismissAlert() {
  const alertBar = document.querySelector('.alert');
  alertBar.style.display = 'none';
}

// Function to check if an element is in the viewport
function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

// Function to handle scroll events
function handleScroll() {
  const skillItems = document.querySelectorAll('.skill-item');
  skillItems.forEach((item) => {
    if (isInViewport(item)) {
      item.classList.add('visible');
    }
  });
}

// Add scroll event listener
window.addEventListener('scroll', handleScroll);

// Trigger on page load in case skills are already in view
window.addEventListener('load', handleScroll);
    

// Back to Top Button Logic
    const backToTopButton = document.querySelector('.back-to-top');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTopButton.classList.add('show');
        } else {
            backToTopButton.classList.remove('show');
        }
    });

    backToTopButton.addEventListener('click', (e) => {
        e.preventDefault();
        document.querySelector('#about').scrollIntoView({
            behavior: 'smooth'
        });
    });
    
// Highlight Active Navigation Link
function highlightActiveNavLink() {
  const sections = document.querySelectorAll('section'); // Get all sections
  const navLinks = document.querySelectorAll('.nav-link'); // Get all navigation links

  // Add scroll event listener
  window.addEventListener('scroll', () => {
    let currentSection = '';

    // Loop through sections to find the one in view
    sections.forEach((section) => {
      const sectionTop = section.offsetTop - 100; // Adjust offset for navbar height
      const sectionHeight = section.offsetHeight;
      if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
        currentSection = section.getAttribute('id'); // Get the ID of the current section
      }
    });

    // Add 'active' class to the corresponding navigation link
    navLinks.forEach((link) => {
      link.classList.remove('active'); // Remove 'active' class from all links
      if (link.getAttribute('href') === `#${currentSection}`) {
        link.classList.add('active'); // Add 'active' class to the current link
      }
    });
  });
}

// Call the function
highlightActiveNavLink();