const colors = [
    "red",
    "blue",
    "pink",
    "green",
    "black",
    "white",
    "orange",
    "yellow",
    "violet",
    "cyan"
]
const CREWMATE = "crewmate";
const IMPOSTER = "imposter";
const DEAD = "dead";
const KILLDELAY = 10000;

var timer;




InitGame()

function InitGame(){
    var r1 = Math.floor(Math.random() * 10);
    var r2 = Math.floor(Math.random() * 10);
    while(r2 == r1)
    r2 = Math.floor(Math.random() * 10);

    for (let i = 0; i < colors.length; i++) {
        localStorage.setItem(colors[i], i!=r1 && i!=r2 ? CREWMATE:IMPOSTER );
    }

    timer = setTimeout(autoKill, KILLDELAY)
}

function autoKill(){
    var r = Math.floor(Math.random() * 10);

    while(localStorage.getItem(colors[r]) == IMPOSTER || localStorage.getItem(colors[r]) == DEAD){
        r = Math.floor(Math.random() * 10);
    }
    localStorage.setItem(colors[r], DEAD);
    checkEnd()
}

function userKill(color){
    localStorage.setItem(colors[color], DEAD);
    checkEnd()
}

function checkEnd(){
    var win = true;
    var lose = 0;

    for (let i = 0; i < colors.length; i++) {
        var c = localStorage.getItem(colors[i]);
        if(c == IMPOSTER){
            win = false;
            lose ++;
        }else if(c == CREWMATE){
            lose --;
        }
    }

    if(lose >= 0){
        window.alert("Perdu !");
    }else if(win){
        window.alert("Gagne !");
    }
    else{
        timer = setTimeout(autoKill, KILLDELAY)
    }

}