const menu = document.getElementById("menu-navbar");
const menuItems = menu.querySelectorAll(".menu-item-has-children");
const toggleBtn = document.querySelector(".toggle-nav");


// Small screen sub-menu display
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
toggleBtn.addEventListener("click", (e) => {
  e.preventDefault();
  menu.classList.toggle("active");
  toggleBtn.classList.toggle("toggle-active");
  arrows();
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
  arrows();
});

// Add down arrow to menu elements with submenus (only on small screen)

const originalMenus = [];
menuItems.forEach(item => {
  originalMenus.push(item.childNodes[0].textContent);
});

const arrows = () => {
  for (let i = 0; i < menuItems.length; i++) {
    menuItems[i].childNodes[0].textContent = originalMenus[i];
  }
  if (menu.classList.contains('active')) {
    menuItems.forEach(item => {
      item.childNodes[0].textContent+=` *`;
    });
  }
}

arrows();

// Copyright year updating
const copyrightParagraph = document.querySelector('.copyright');

window.addEventListener('DOMContentLoaded', () => {
  var copyrightDate = new Date();
  var copyrightYear = copyrightDate.getFullYear();
  if (copyrightYear > 2022) {
    copyrightParagraph.textContent = `Copyright © 2013-${copyrightYear}<br>Złota Ósemka`;
  }
});
