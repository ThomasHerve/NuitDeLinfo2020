var timer;

document.addEventListener('keydown', function(event) {
    if(event.key == "F4"){
        ShowLose();
    }
    if(event.key == "k" || event.key == "K") {
        userKill(getPersonnageColor());
    }
    if(event.key == "F2"){
        if(localStorage.getItem("timer")!= null){
            if(window.confirm("Voulez vous abandonner votre equipage ?")){
                clearTimeout(timer);
                localStorage.removeItem("timer");
                document.getElementById("personnage").remove();
            }
        }
        else if(window.confirm("Emergency Call :\n Répondre à l'appel ?")){
            if(window.confirm("Voulez vous un rappel de la mission ?"))
                window.alert(" 2 imposteurs sont parmi nous !\n Vous devez interroger tout le monde, et ejecter les suspects (touche K).\n Bonne chance !")
            InitGame();
            showPersonnage();
        }

    }
        
  });





if(localStorage.getItem("timer")!= null){
    timer = setTimeout(autoKill, getKillDelay() - (Date.now() - localStorage.getItem("timer")));
    showPersonnage();
}

function InitGame(){
    var r1 = Math.floor(Math.random() * 10);
    var r2 = Math.floor(Math.random() * 10);
    while(r2 == r1)
    r2 = Math.floor(Math.random() * 10);

    for (let i = 0; i < getColorNumber(); i++) {
        localStorage.setItem(getColor(i), i!=r1 && i!=r2 ? getCREWMATE():getIMPOSTER() );
        localStorage.setItem(getColor(i)+"s",localStorage.getItem(getColor(i)));
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
    if(localStorage.getItem(color) == getDEAD())
        return;
    clearTimeout(timer);
    localStorage.setItem(color, getDEAD());
    document.getElementById("personnage").remove();
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
        ShowLose()
        localStorage.removeItem("timer");
    }else if(win){
        ShowWin()
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

function ShowWin(){
    var modal = document.createElement("div");
    modal.className = 'modal';
    document.getElementById('body').appendChild(modal); 

    var modalImg = document.createElement("img");
    modalImg.className = 'modal-content';
    modalImg.src = 'img/AmongUs/Victory.png';
    modalImg.style.width = '100%';
    modalImg.style.height = '100%';
    modal.appendChild(modalImg);
    modal.style.display = "block";
    modal.onclick = function() {
        modal.style.display = "none";
    }

}
function ShowLose(){
    var modal = document.createElement("div");
    modal.className = 'modal';
    document.getElementById('body').appendChild(modal); 

    var modalImg = document.createElement("img");
    modalImg.className = 'modal-content';
    modalImg.src = 'img/AmongUs/Defeat.png';
    modalImg.style.width = '100%';
    modalImg.style.height = '100%';
    modal.appendChild(modalImg);
    modal.style.display = "block";
    modal.onclick = function() {
        modal.style.display = "none";
    }

    var imp1 = null, imp2  = null;
    for (let i = 0; i < getColorNumber(); i++) {
        if(localStorage.getItem(getColor(i)+"s") == getIMPOSTER()){
            if(imp1 == null)
                imp1 = i;
            else
                imp2 = i;
        }
    }

    var img1 = document.createElement("img");
    img1.src = 'img/AmongUs/Base-01.png';
    auicon.style = "filter:hue-rotate("+getColorAngle(imp1)+"deg); width:20%; height:20%";
    modalImg.appendChild(img1);


    var img2 = document.createElement("img");
    img1.src = 'img/AmongUs/Base-01.png';
    auicon.style = "filter:hue-rotate("+getColorAngle(imp2)+"deg); width:20%; height:20%";
    modalImg.appendChild(img2);

}
