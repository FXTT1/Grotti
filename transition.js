document.addEventListener("DOMContentLoaded", function() {
    var logo = document.getElementById("logo");
    var overlay = document.getElementById("transition-overlay");

    logo.addEventListener("animationend", function() {
    
        window.location.href = "Main.html";
    });
});