document.addEventListener("DOMContentLoaded", () => {
    const menuBar = document.querySelector(".fa-bars");
    const menuNav = document.querySelector(".menu");
    const navBar = document.querySelector(".navbar");
    const boxes = document.querySelectorAll('.box-foto .box');
  
    // Toggle menu
    menuBar.addEventListener("click", () => {
      menuNav.classList.toggle("menu-active");
    });
  
    // Change navbar background on scroll
    window.addEventListener("scroll", () => {
      const windowPosition = window.scrollY > 0;
      navBar.classList.toggle("scrolling-active", windowPosition);
      menuNav.classList.remove("menu-active");
    });
  
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
  
    // Show images when they appear in viewport
    function checkBoxes() {
      boxes.forEach(box => {
        if (isInViewport(box)) {
          box.classList.add('show');
        } else {
          box.classList.remove('show');
        }
      });
    }
  
    window.addEventListener('load', checkBoxes);
    window.addEventListener('scroll', checkBoxes);
  });
  