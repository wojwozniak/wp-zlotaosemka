
// Small screen sub-menu display
const menuItems = document.querySelectorAll(".menu-item-has-children");

for (let i = 0; i < menuItems.length; i++) {
  menuItems[i].addEventListener("click", (e) => {
    let a = e.currentTarget.lastElementChild.classList.contains("show");
    for (let i = 0; i < menuItems.length; i++) {
      if (menuItems[i].lastElementChild.classList.contains("show")) {
        menuItems[i].lastElementChild.classList.remove("show");
      }
    }
    e.currentTarget.lastElementChild.classList.toggle("show");
    if (a === true) {
      e.currentTarget.lastElementChild.classList.toggle("show");
    }
    if ((window.innerWidth > 992) && e.currentTarget.lastElementChild.classList.contains("show")) {
      e.currentTarget.lastElementChild.classList.remove("show");
    }
  });
}

// Menu toggle
const toggleBtn = document.querySelector(".toggle-nav");
const menu = document.getElementById("menu-navbar");

toggleBtn.addEventListener("click", (e) => {
  e.preventDefault();
  menu.classList.toggle("active");
  toggleBtn.classList.toggle("toggle-active");
});

// Make sure menu doesn't stay open after resizing
window.addEventListener("resize", () => {
  if (window.innerWidth > 992) {
    if (menu.classList.contains("active")) {
      menu.classList.remove("active");
      toggleBtn.classList.remove("toggle-active");
    }
    for (let i = 0; i < menuItems.length; i++) {
      menuItems[i].lastElementChild.classList.remove("show");
    }
  }
});