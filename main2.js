var home = '<i class="bi bi-house"></i>'
var wSize;
var hSize;
start();
window.addEventListener('resize', start);

function start() {
    console.log(document.documentElement.clientWidth);
    wSize = document.documentElement.clientWidth;
    console.log(document.documentElement.clientHeight);
    hSize = document.documentElement.clientHeight;
    if (wSize > 1200) {
        console.log("La ventana es mayor que 1200px")
    } else {
        console.log("La ventana es menor que 1200px")
    }
}

function nameBtn() {
    document.getElementById("navButton").innerHTML = home + ' ' + document.title;
}
function openNav() {
    if (wSize > 1200) {
        document.getElementById("mySidebar").style.height = "60%";
        document.getElementById("mySidebar").style.width = "18%";
        document.getElementById("navButton").innerHTML = home + ' ' + document.title;
    } else
        if (wSize > 700) {
            document.getElementById("mySidebar").style.height = "45%";
            document.getElementById("mySidebar").style.width = "20%";
            document.getElementById("navButton").innerHTML = home + ' ' + document.title;
        } else
            if (wSize < 700 && wSize > 500) {
                document.getElementById("mySidebar").style.height = "90%";
                document.getElementById("mySidebar").style.width = "45%";
                document.getElementById("navButton").innerHTML = home + ' ' + document.title;
            } else
                if (wSize < 500) {
                    document.getElementById("mySidebar").style.height = "45%";
                    document.getElementById("mySidebar").style.width = "35%";
                    document.getElementById("navButton").innerHTML = home + ' ' + document.title;
                }
}

document.getElementById("mySidebar").addEventListener("mouseleave", function () {
    if (wSize > 1200) {
        document.getElementById("mySidebar").style.height = "8%";
        document.getElementById("mySidebar").style.width = "14%";
        document.getElementById("navButton").style.left = "8%";
        document.getElementById("navButton").innerHTML = home + ' ' + document.title;
    } else
        if (wSize > 700) {
            document.getElementById("mySidebar").style.height = "8%";
            document.getElementById("mySidebar").style.width = "14%";
            document.getElementById("navButton").style.left = "8%";
            document.getElementById("navButton").innerHTML = home + ' ' + document.title;
        } else
            if (wSize < 700 && wSize > 500) {
                document.getElementById("mySidebar").style.height = "10%";
                document.getElementById("mySidebar").style.width = "32%";
                document.getElementById("navButton").style.left = "10%";
                document.getElementById("navButton").innerHTML = home + ' ' + document.title;
            } else
                if (wSize < 500) {
                    document.getElementById("mySidebar").style.height = "9%";
                    document.getElementById("mySidebar").style.width = "26%";
                    document.getElementById("navButton").style.left = "14%";
                    document.getElementById("navButton").innerHTML = home + ' ' + document.title;
                }
});


startor();
window.onresize = startor;
function startor() {
    console.log(document.documentElement.clientWidth);
    wSize = document.documentElement.clientWidth;
    console.log(document.documentElement.clientHeight);
    hSize = document.documentElement.clientHeight;
    if (wSize > 1200) {
        console.log("La ventana es mayor que 1200px")
    } else {
        console.log("La ventana es menor que 1200px")
    }
}

