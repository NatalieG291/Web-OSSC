document.getElementById("btn").addEventListener("mouseenter", function mostrarT() {
    document.getElementById("itm").style.transition = "0.8s";
    document.getElementById("itm").style.opacity = "1";
});
document.getElementById("btn").addEventListener("mouseleave", function ocultarT() {
    document.getElementById("itm").style.transition = "0.2s";
    document.getElementById("itm").style.opacity = "0";
});