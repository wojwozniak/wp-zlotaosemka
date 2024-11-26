const badUri = window.location.pathname;
let uri = badUri.substring(1, badUri.length - 1);

const socials = [
    {
        '8dgz': {
            'Facebook': 'https://www.facebook.com/zloteiskierki'
        }
    },
    {
        '18dgz': {
            'Facebook': 'https://www.facebook.com/zloteduszki/'
        }
    },
    {
        '3ddh': {
            'Facebook': 'https://www.facebook.com/profile.php?id=100071409915207'
        }
    },
    {
        '8ddh': {
            'Facebook': 'https://www.facebook.com/profile.php?id=100080487730459',
            'Instagram': 'https://www.instagram.com/8_ddh/'
        }
    },
    {
        '10ddh': {
            'Facebook': 'https://www.facebook.com/10ddhzwiad',
            'Instagram': 'https://www.instagram.com/10.ddh/'
        }
    },
    {
        '80dds': {
            'Facebook': 'https://www.facebook.com/80dds/',
            'Instagram': 'https://www.instagram.com/80dds/'
        }
    },
    {
        '88ddw': {
            'Facebook': 'https://www.facebook.com/88ddwzloci'
        }
    },
    {
        'aurum': {
            'Facebook': 'https://www.facebook.com/profile.php?id=100068660199296'
        }
    },
    {
        'hkt': {
            'Facebook': 'https://www.facebook.com/hktzlotyazymut'
        }
    },
    {
        'zesp-charytatywny': {
            'Facebook': 'https://www.facebook.com/profile.php?id=100066659972284'
        }
    },
];


const socialLinks = document.querySelectorAll('.s-link');
if (socialLinks) {
    for (let i = 0; i < socials.length; i++) {
        if (socials[i][uri]) {
            if (socials[i][uri]['Facebook']) {
                document.querySelector('.fb-link-text').textContent = 'Facebook';
                document.querySelector('.fb-link').href = socials[i][uri]['Facebook'];
                document.querySelector('.fb-link').classList.remove('dont-show');
            }
            if (socials[i][uri]['Instagram']) {
                document.querySelector('.ig-link-text').textContent = 'Instagram';
                document.querySelector('.ig-link').href = socials[i][uri]['Instagram'];
                document.querySelector('.ig-link').classList.remove('dont-show');
            }
        }
    }
}

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
if (descs.length > 0) {
    descs[0].classList.add('displaydesc');
}
const newdescs = [];
descs.forEach(desc => {
    const help = desc.id;
    const newhelp = help.slice(2);
    newdescs.push(newhelp);
});
const btns = document.querySelectorAll(".sitebtn");
if (btns.length > 0) {
    btns[0].classList.add('currentbtn');
}
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
if (gals.length > 0) {
    gals[0].classList.add('displaygal');
}
const newgals = [];
gals.forEach(gal => {
    const help = gal.id;
    const newhelp = help.slice(2);
    newgals.push(newhelp);
});
const galbtns = document.querySelectorAll(".galbtn");
if (galbtns.length > 0) {
    galbtns[0].classList.add('currentbtn');
}
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
