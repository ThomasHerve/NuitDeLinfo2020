var color =getColor(colorRotation());
var indice = "blabla";
var isalive = localStorage.getItem(color) != getDEAD();

var auicon = document.createElement("img");
auicon.src = 'img/AmongUs/'+ (Math.random() < 0.5 ? 'Base' : 'Run') +'-0'+ Math.floor(Math.random()*6 +1) +'.png';
auicon.style = "filter:hue-rotate("+getColorAngle(getColorIndex(color))+"deg); width:20%; height:20%";
document.getElementById('body').appendChild(auicon); 




function colorRotation(){
    return Math.floor(Math.random() * 10);
}

function getPersonnageColor(){
    return color;
}
