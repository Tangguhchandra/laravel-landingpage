const menuBar = document.querySelector(".menu-bar");
const menuNav = document.querySelector(".menu");

menuBar.addEventListener("click", () => {
  menuNav.classList.toggle("menu-active");
});

const navBar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {
  console.log(window.scrollY);
  const windowPosition = window.scrollY > 0;
  navBar.classList.toggle("scrolling-active", windowPosition);
  menuNav.classList.remove("menu-active");
});



// animasi foto Fungsi untuk memeriksa apakah elemen terlihat di viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
  
  // Dapatkan semua gambar dalam kotak foto
  const boxes = document.querySelectorAll('.box-foto .box');
  
  // Tambahkan kelas show ketika gambar muncul di viewport
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
  