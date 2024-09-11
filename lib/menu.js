const urlParams = new URLSearchParams(window.location.search);
const myParam = urlParams.get("Pagina");
document.getElementById(myParam).classList.add("active");