var wBrowser = window.outerWidth;
var hBrowser = window.outerHeight;

console.log("W: " + wBrowser + "H: " + hBrowser);

document.getElementById("btn").addEventListener("mouseenter", function mostrarT() {
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

});

function resizeW() {
    wBrowser = window.outerWidth;
    hBrowser = window.outerHeight;
    console.log("W: " + wBrowser + "H: " + hBrowser);
}