let navEl= document.querySelector(".nav-info-container");
let hamburgerEl= document.querySelector(".hamburger");

hamburgerEl.addEventListener("click", ()=>{
  navEl.classList.toggle("nav-info-container--open");
  hamburgerEl.classList.toggle("hamburger--open");
});


navEl.addEventListener("click", ()=>{
  navEl.classList.remove("nav-info-container--open");
  hamburgerEl.classList.remove("hamburger--open");
});
