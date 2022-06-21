// ?
$(document).ready(() => {
	
	$(window).scroll(() => {
		if ($(this).scrollTop() > 1){  
			$('.page-title').addClass("sticky");
		}
		else{
			$('.page-title').removeClass("sticky");
		}
	});

});

// ********** Navbar button ************

const navToggle = document.querySelector(".nav-toggle");
const linksContainer = document.querySelector(".links-container");
const links = document.querySelector(".links");

navToggle.addEventListener("click", () => {
  const linksHeight = links.getBoundingClientRect().height;
  const containerHeight = linksContainer.getBoundingClientRect().height;
  if (containerHeight === 0) {
    linksContainer.style.height = `${linksHeight}px`;
    navToggle.classList.add("nav-toggle-active");
  } else {
    linksContainer.style.height = 0;
    navToggle.classList.remove("nav-toggle-active");
  }
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