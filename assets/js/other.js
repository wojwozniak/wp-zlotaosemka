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
                console.log("aaa");
                btn.target.classList.add("currentbtn");
                descs[i].classList.add("displaydesc");
            }
        }
    })
});