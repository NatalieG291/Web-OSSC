var home = '<i class="bi bi-house"></i>'
function nameBtn(){
    document.getElementById("navButton").innerHTML = home + " " + document.title;
}
function openNav() {
  document.getElementById("mySidebar").style.height = "50%";
  document.getElementById("mySidebar").style.width = "12%";
    document.getElementById("navButton").innerHTML = home + " " + document.title;
}

document.getElementById("mySidebar").addEventListener("mouseleave", function() {
  document.getElementById("mySidebar").style.height = "7%";
  document.getElementById("mySidebar").style.width = "7%";
  document.getElementById("navButton").style.left = "50px";
    document.getElementById("navButton").innerHTML = home + " " + document.title;
});