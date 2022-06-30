const nav = document.getElementById("navbar");
if (window.scrollY > 200) {
    nav.classList.add("fixed");
} else {
    nav.classList.remove("fixed");
} 
document.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        nav.classList.add("fixed");
    } else {
        nav.classList.remove("fixed");
   } 
});