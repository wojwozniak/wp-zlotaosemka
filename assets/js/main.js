
const toggleBtn = document.querySelector(".toggle-nav");
const menu = document.getElementById("menu-navbar");

toggleBtn.addEventListener("click", (e) => {
  e.preventDefault();
  menu.classList.toggle("active");
  toggleBtn.classList.toggle("toggle-active");
});


// ********** Top link button  ************

const topLink = document.querySelector(".top-link");

window.addEventListener("scroll", () => {
  const scrollHeight = window.pageYOffset;
  if (scrollHeight > 900) {
    topLink.classList.add("show-link");
  } else {
    topLink.classList.remove("show-link");
  }
});