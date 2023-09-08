function Skiny(){
var skiny = document.getElementById("Skiny");
var platnosci = document.getElementById("Platnosci");
    skiny.style.display  = 'block';
    platnosci.style.display  = 'none';
}
function Platnosci(){
    var skiny = document.getElementById("Skiny");
    var platnosci = document.getElementById("Platnosci");
    skiny.style.display  = 'none';
    platnosci.style.display  = 'block';
}