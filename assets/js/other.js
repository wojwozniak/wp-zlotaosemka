// Making navbar fixed
const nav = document.getElementById("navbar");
nav.classList.add("fixed");

// Slow scroll of background
const target = document.getElementById("site-bg");
document.getElementById("home").onscroll = () => {
    let yvalue = window.scrollY * 0.5;
    if (target !== null) {
        target.style.top = yvalue + "px"; 
    }
}


// Menu
const descs = document.querySelectorAll(".desc");
const newdescs = [];
descs.forEach(desc => {
    const help = desc.id;
    const newhelp = help.slice(2);
    newdescs.push(newhelp);
});
const btns = document.querySelectorAll(".sitebtn");
btns.forEach(btn => {
    btn.addEventListener('click', btn => {
        for (let i = 0; i < newdescs.length; i++) {
            descs[i].classList.remove("displaydesc");
            btns[i].classList.remove("currentbtn");
        }
        for (let i = 0; i < newdescs.length; i++) {
            if (btn.target.id === newdescs[i]) {
                btn.target.classList.add("currentbtn");
                descs[i].classList.add("displaydesc");
            }
        }
    })
});

// Gallery buttons display

const gals = document.querySelectorAll(".gal");
const newgals = [];
gals.forEach(gal => {
    const help = gal.id;
    const newhelp = help.slice(2);
    newgals.push(newhelp);
});
const galbtns = document.querySelectorAll(".galbtn");
galbtns.forEach(btn => {
    btn.addEventListener('click', btn => {
        for (let i = 0; i < newgals.length; i++) {
            gals[i].classList.remove("displaygal");
            galbtns[i].classList.remove("currentbtn");
        }
        for (let i = 0; i < newgals.length; i++) {
            if (btn.target.id === newgals[i]) {
                btn.target.classList.add("currentbtn");
                gals[i].classList.add("displaygal");
            }
        }
    })
}); 