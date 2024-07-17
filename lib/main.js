var wBrowser = window.outerWidth;
var hBrowser = window.outerHeight;
var fs = document.getElementById("mif");
var fs2 = document.getElementById("mif2");
var fs3 = document.getElementById("mif3");
var fs4 = document.getElementById("mif4");
var ig = document.getElementById("infoGiro");
var cg = document.getElementById("contGiro");
var cg1 = document.getElementById("cardG1");
var cg2 = document.getElementById("cardG2");
var movil;

console.log("W: " + wBrowser + "H: " + hBrowser);
var sPath = window.location.pathname;
var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
console.log(sPage);

/*document.getElementById("btn").addEventListener("mouseenter", function mostrarT() {
    document.getElementById("itm").style.transition = "0.5s";
    document.getElementById("itm").style.opacity = "1";

    document.getElementById("itm2").style.transition = "0.5s";
    document.getElementById("itm2").style.opacity = "1";

    document.getElementById("itm3").style.transition = "0.5s";
    document.getElementById("itm3").style.opacity = "1";

    document.getElementById("itm4").style.transition = "0.5s";
    document.getElementById("itm4").style.opacity = "1";

});
document.getElementById("btn").addEventListener("mouseleave", function ocultarT() {
    document.getElementById("itm").style.transition = "0.5s";
    document.getElementById("itm").style.opacity = "0";

    document.getElementById("itm2").style.transition = "0.5s";
    document.getElementById("itm2").style.opacity = "0";

    document.getElementById("itm3").style.transition = "0.5s";
    document.getElementById("itm3").style.opacity = "0";

    document.getElementById("itm4").style.transition = "0.5s";
    document.getElementById("itm4").style.opacity = "0";

});*/
document.getElementById("btnOpenForm").addEventListener("click", function mostrarF() {
    if (document.getElementById("formOpen").classList.contains("formsend--open")) {
        document.getElementById("formOpen").classList.remove("formsend--open");
    }
    else {
        document.getElementById("formOpen").classList.add("formsend--open");
    }
});
document.getElementById("btnOpenForm2").addEventListener("click", function mostrarF2() {
    if (document.getElementById("formOpen").classList.contains("formsend--open")) {
        document.getElementById("formOpen").classList.remove("formsend--open");
    }
    else {
        document.getElementById("formOpen").classList.add("formsend--open");
    }
});

function resizeW() {
    wBrowser = window.outerWidth;
    hBrowser = window.outerHeight;
    console.log("W: " + wBrowser + "H: " + hBrowser);
    if (wBrowser < 700) {
        if (sPage == "index.html") {
            fs.classList.remove("fs-4");
            fs.classList.add("fs-6")

            fs2.classList.remove("fs-4");
            fs2.classList.add("fs-6")

            fs3.classList.remove("fs-4");
            fs3.classList.add("fs-6")

            fs4.classList.remove("fs-4");
            fs4.classList.add("fs-6")
        }
        if (sPage == "nosotros.html") {
            ig.classList.remove("fs-3");
            ig.classList.add("fs-6")

            cg.classList.remove("w-50");
            cg1.classList.remove("border-end");
            cg2.classList.remove("border-end");
        }
    }
}

if (wBrowser < 700) {
    if (sPage == "index.html") {
        fs.classList.remove("fs-4");
        fs.classList.add("fs-6")

        fs2.classList.remove("fs-4");
        fs2.classList.add("fs-6")

        fs3.classList.remove("fs-4");
        fs3.classList.add("fs-6")

        fs4.classList.remove("fs-4");
        fs4.classList.add("fs-6")
    }
    if (sPage == "nosotros.html") {
        ig.classList.remove("fs-3");
        ig.classList.add("fs-6")

        cg.classList.remove("w-50");
        cg1.classList.remove("border-end");
        cg2.classList.remove("border-end");
    }
}

function overX() {
    if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
        console.log("Estás usando un dispositivo móvil!!");
        movil = 'si';
    } else {
        console.log("No estás usando un móvil");
        
        movil = 'no';
        document.getElementById("NavButton").href = "index.html";
        event.preventDefault();
    }
}

if (sPage == "index.html") {
    if (movil == 'no') {
        document.getElementById('cardContainer').style.overflowX = 'hidden';
    }
    else {
        document.getElementById('cardContainer').style.overflowX = 'auto';
    }

    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const cardContainer = document.getElementById('cardContainer');

    let isMouseDown = false;
    let startX;
    let scrollLeft;

    prevBtn.addEventListener('click', function () {
        cardContainer.scroll({
            left: cardContainer.scrollLeft - 350, // Adjust scroll distance as needed
            behavior: 'smooth' // Smooth scrolling behavior
        });
    });

    nextBtn.addEventListener('click', function () {
        cardContainer.scroll({
            left: cardContainer.scrollLeft + 350, // Adjust scroll distance as needed
            behavior: 'smooth' // Smooth scrolling behavior
        });
    });

    cardContainer.addEventListener('mousedown', (e) => {
        isMouseDown = true;
        startX = e.pageX - cardContainer.offsetLeft;
        scrollLeft = cardContainer.scrollLeft;
    });

    cardContainer.addEventListener('mouseleave', () => {
        isMouseDown = false;
    });

    cardContainer.addEventListener('mouseup', () => {
        isMouseDown = false;
    });

    cardContainer.addEventListener('mousemove', (e) => {
        if (!isMouseDown) return;
        e.preventDefault();
        const x = e.pageX - cardContainer.offsetLeft;
        const walk = (x - startX) * 3; // Adjust scroll speed
        cardContainer.scrollLeft = scrollLeft - walk;
    });
}

// actualizacion menu

document.getElementById("NavButton").addEventListener("click", function mostrarM() {
    if (movil == "si") {
        if (document.getElementById("mySidebar").classList.contains("open")) {
            document.getElementById("mySidebar").classList.remove("open");
        } else {
            document.getElementById("mySidebar").classList.add("open");
            document.getElementById("NavButton").href = "index.html";
            event.preventDefault();
        }
    }
});