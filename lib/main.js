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

  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const cardContainer = document.getElementById('cardContainer');

  const prevBtn2 = document.getElementById('prevBtn2');
  const nextBtn2 = document.getElementById('nextBtn2');
  const cardContainer2 = document.getElementById('cardContainer2');

  let isMouseDown = false;
  let startX;
  let scrollLeft;

  prevBtn.addEventListener('click', function() {
    cardContainer.scroll({
      left: cardContainer.scrollLeft - 350, // Adjust scroll distance as needed
      behavior: 'smooth' // Smooth scrolling behavior
    });
  });

  nextBtn.addEventListener('click', function() {
    cardContainer.scroll({
      left: cardContainer.scrollLeft + 350, // Adjust scroll distance as needed
      behavior: 'smooth' // Smooth scrolling behavior
    });
  });

  prevBtn2.addEventListener('click', function() {
    cardContainer2.scroll({
      left: cardContainer2.scrollLeft - 350, // Adjust scroll distance as needed
      behavior: 'smooth' // Smooth scrolling behavior
    });
  });

  nextBtn2.addEventListener('click', function() {
    cardContainer2.scroll({
      left: cardContainer2.scrollLeft + 350, // Adjust scroll distance as needed
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

  cardContainer2.addEventListener('mousedown', (e) => {
    isMouseDown = true;
    startX = e.pageX - cardContainer2.offsetLeft;
    scrollLeft = cardContainer2.scrollLeft;
  });

  cardContainer2.addEventListener('mouseleave', () => {
    isMouseDown = false;
  });

  cardContainer2.addEventListener('mouseup', () => {
    isMouseDown = false;
  });

  cardContainer2.addEventListener('mousemove', (e) => {
    if (!isMouseDown) return;
    e.preventDefault();
    const x = e.pageX - cardContainer2.offsetLeft;
    const walk = (x - startX) * 3; // Adjust scroll speed
    cardContainer2.scrollLeft = scrollLeft - walk;
  });