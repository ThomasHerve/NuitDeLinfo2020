getColors();
var color = getColors()[colorRotation()];
var indice = "blabla";
var isalive = localStorage.getItem(color) != getDead();


function colorRotation(){
    return Math.floor(Math.random() * 10);
}

function getPersonnageColor(){
    return color;
}