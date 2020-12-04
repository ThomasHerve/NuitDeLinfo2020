const colors = [
    "red",
    "orange",
    "yellow",
    "lime",
    "green",
    "cyan",
    "blue",
    "violet",
    "magenta",
    "pink"
]
const colorangle = [
    "0",
    "30",
    "60",
    "90",
    "120",
    "180",
    "240",
    "270",
    "300",
    "330"

]


const CREWMATE = "crewmate";
const IMPOSTER = "imposter";
const DEAD = "dead";
const KILLDELAY = 10000;



function getColorNumber(){
    return colors.length;
}
function getColor(a){
    return colors[a];
}
function getColorIndex(c){
    return colors.indexOf(c);
}
function getColorAngle(a){
    return colorangle[a];
}


function getDEAD(){
    return DEAD;
}
function getCREWMATE(){
    return CREWMATE;
}
function getIMPOSTER(){
    return IMPOSTER;
}
function getKillDelay(){
    return KILLDELAY;
}