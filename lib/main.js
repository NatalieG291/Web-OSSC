var wBrowser = window.outerWidth;
var hBrowser = window.outerHeight;
var navegador = navigator.userAgent;

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

function overX() {
  if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
    console.log("Estás usando un dispositivo móvil!!");
    document.getElementById('cardContainer').style.overflowX = 'auto';
  } else {
    console.log("No estás usando un móvil");
    document.getElementById('cardContainer').style.overflowX = 'hidden';
  }
  
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