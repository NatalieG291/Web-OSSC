var home = '<i class="bi bi-house"></i>'
function nameBtn(){
    document.getElementById("navButton").innerHTML = home + " Inicio"; //+ document.title;
}
function openNav() {
  document.getElementById("mySidebar").style.height = "50%";
  document.getElementById("mySidebar").style.width = "12%";
    document.getElementById("navButton").innerHTML = home + " " + document.title;
}

document.getElementById("mySidebar").addEventListener("mouseleave", function() {
  document.getElementById("mySidebar").style.height = "8%";
  document.getElementById("mySidebar").style.width = "8%";
    document.getElementById("navButton").style.left = "50px";
    document.getElementById("navButton").innerHTML = home + " Inicio"; //+ document.title;
});