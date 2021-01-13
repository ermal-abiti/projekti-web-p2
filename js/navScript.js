var navToggleOn = false;
var navElement = document.getElementsByTagName("nav")[0];

function navToggle() {
    if (navToggleOn) {
        navElement.style.display = "none";
        navToggleOn = false;
    }
    else if (!navToggleOn) {
        navElement.style.display = "flex";
        navToggleOn = true;
    }
}

// kontrollojme gjersine e dritares
// nese dritarja kalon gjeresine prej 800 pixelve e me shume, duhet qe elementet ne NAV ti shfaqim automatikisht
// nese dritarja kalon gjeresin prej me pak se 800 pixeleve, duhet qe elementet ne NAV ti fshehim derisa te shtypet butoni per shfaqjen e tyre
function windowsSizeCheck() {
    if (window.innerWidth > 800) {
        navElement.style.display = "flex";
        navToggleOn = true
    }
    if(window.innerWidth <= 800) {
        navElement.style.display = "none";
        navToggleOn = false;
    }
}

window.onresize = windowsSizeCheck;
// ---------------