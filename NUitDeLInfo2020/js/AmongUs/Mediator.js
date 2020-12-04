var timer;

document.addEventListener('keydown', function(event) {
    if(event.key == "k" || event.key == "K") {
        userKill(getPersonnageColor());
    }
    if(event.key == "F2"){
        if(window.confirm("Emergency Call :\n Répondre à l'appel ?")){
            if(window.confirm("Voulez vous un rappel de la mission ?"))
                window.alert(" 2 imposteurs sont parmi nous !\n Vous devez interroger tout le monde, et ejecter les suspects (touche K).\n Bonne chance !")
            InitGame();
        }

    }
        
  });





if(localStorage.getItem("timer")!= null)
    timer = setTimeout(autoKill, getKillDelay() - (Date.now() - localStorage.getItem("timer")));


function InitGame(){
    var r1 = Math.floor(Math.random() * 10);
    var r2 = Math.floor(Math.random() * 10);
    while(r2 == r1)
    r2 = Math.floor(Math.random() * 10);

    for (let i = 0; i < getColorNumber(); i++) {
        localStorage.setItem(getColor(i), i!=r1 && i!=r2 ? getCREWMATE():getIMPOSTER() );
    }
    launchTimer();
}

function autoKill(){
    var r = Math.floor(Math.random() * 10);

    while(localStorage.getItem(getColor(r)) == getIMPOSTER() || localStorage.getItem(getColor(r)) == getDEAD()){
        r = Math.floor(Math.random() * 10);
    }
    localStorage.setItem(getColor(r), getDEAD());
    console.log("Kill de "+getColor(r));

    for (let i = 0; i < getColorNumber(); i++) {
        localStorage.removeItem(getColor(i)+"quote");
    }
    checkEnd()
}

function userKill(color){
    clearTimeout(timer);
    localStorage.setItem(color, getDEAD());
    checkEnd();
}

function checkEnd(){
    var win = true;
    var lose = 0;

    for (let i = 0; i < getColorNumber(); i++) {
        var c = localStorage.getItem(getColor(i));
        if(c == getIMPOSTER()){
            win = false;
            lose ++;
        }else if(c == getCREWMATE()){
            lose --;
        }
    }

    if(lose >= 0){
        window.alert("Perdu !");
        localStorage.removeItem("timer");
    }else if(win){
        window.alert("Gagne !");
        localStorage.removeItem("timer");
    }
    else{
        launchTimer();
    }


    
}

function launchTimer(){
    clearTimeout(timer);
    timer = setTimeout(autoKill, getKillDelay());
    localStorage.setItem("timer", Date.now());
}

function printGameState(){
    for (let i = 0; i < getColorNumber(); i++) {
        console.log(getColor(i) + " : " + localStorage.getItem(getColor(i)));
    }

}


