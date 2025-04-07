document.addEventListener("DOMContentLoaded", function () {
    const banner = document.querySelector(".banner");
    const navbar = document.querySelector(".navbar");
  
  
    window.addEventListener("scroll", function () {
      if (window.scrollY > 60) { 
        banner.classList.add("banner-hidden"); 
        navbar.classList.add("navbar-fixed");  
      } else {
        banner.classList.remove("banner-hidden");
        navbar.classList.remove("navbar-fixed");  
      }
    });
  });
  
 
  
  document.querySelectorAll('.dropdown-toggle').forEach(function(dropdown) {
    dropdown.removeAttribute('data-bs-toggle');
  });

