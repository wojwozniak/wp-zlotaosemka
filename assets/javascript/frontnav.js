// ### CONFIG - tu można zmieniać! ###
// Breakpoint strony - zmienić należy też w :root w style.css 
let breakpoint = 1100;

// ### KONIEC CONFIGU ###

// ********** front-page navbar behaviour ************

// Selections 

const navbar = document.getElementById("nav");
const ul = document.getElementById("ul");
const logo = document.querySelector(".logo");

// First load setup

document.addEventListener('DOMContentLoaded', () => {
  const viewportWidth = window.innerWidth;
  if (viewportWidth > breakpoint) {
    navbar.classList.remove("fixed-nav");
    ul.classList.add("white");
    logo.classList.add("invertcolor");
  }
  else {
    navbar.classList.add("fixed-nav");
    ul.classList.remove("white");
    logo.classList.remove("invertcolor");
  }
});

// Make sure resizing doesn't mess up anything

window.addEventListener("resize",  () => {
  const viewportWidth = window.innerWidth;
  if (viewportWidth < breakpoint) {
    navbar.classList.add("fixed-nav");
    ul.classList.remove("white");
    logo.classList.remove("invertcolor");
  } else {
    navbar.classList.remove("fixed-nav");
    ul.classList.add("white");
    logo.classList.add("invertcolor");
  }
});

// Scroll fixing navbar

window.addEventListener("scroll", () => {
  const scrollHeight = window.pageYOffset;
  const navHeight = navbar.getBoundingClientRect().height;
  const viewportWidth = window.innerWidth;
  if (viewportWidth < breakpoint || scrollHeight > navHeight) {
    navbar.classList.add("fixed-nav");
    ul.classList.remove("white");
    logo.classList.remove("invertcolor");
  } else {
    navbar.classList.remove("fixed-nav");
    ul.classList.add("white");
    logo.classList.add("invertcolor");
  }
});