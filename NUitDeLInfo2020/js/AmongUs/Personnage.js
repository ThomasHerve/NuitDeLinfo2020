var color = getColor(colorRotation());
function showPersonnage(){
    var indice = indiceGen();
    var isalive = localStorage.getItem(color) != getDEAD();
    
    var auicon = document.createElement("img");
    auicon.id = 'personnage';
    auicon.src = 'img/AmongUs/'+ (Math.random() < 0.5 ? 'Base' : 'Run') +'-0'+ Math.floor(Math.random()*6 +1) +'.png';
    auicon.style = "filter:hue-rotate("+getColorAngle(getColorIndex(color))+"deg); width:20%; height:20%";
    auicon.title = indice;
    document.getElementById('body').appendChild(auicon); 
}


function colorRotation(){
    return Math.floor(Math.random() * 10);
}

function indiceGen(){
    if(localStorage.getItem(color) == getDEAD())
        return "J'ai si mal ...";

    var quote = localStorage.getItem(color+"quote");
    if(quote != null)
        return quote;

    var r = Math.floor(Math.random() * 12);
    switch(r){
        case 0 :  quote = getQuote(-2);
        case 1,2 : quote = getQuote(+2);break;
        case 3,4,5 : quote = getQuote(-1);break;
        case 6,7,8 : quote = getQuote(+1);break;
        default : return getQuote(0);
    }
    var name1,name2;
    if((localStorage.getItem(color) == getCREWMATE() && (r == 1 || r == 2 || r == 6 || r ==7 || r == 8)) || (localStorage.getItem(color) == getIMPOSTER() && (r == 0 || r == 3 || r == 4 || r ==5))){
        name1 = getRandomPlayer(getCREWMATE);
        name2 = getRandomPlayer(getCREWMATE);
    }else{
        name1 = getRandomPlayer(getIMPOSTER);
        name2 = getRandomPlayer(getIMPOSTER);
    }
    quote = quote.replace("@", name1);
    quote = quote.replace("@", name2);

    localStorage.setItem(color+"quote",quote);
    return quote;
}

function getRandomPlayer(player){
    var r = Math.floor(Math.random() * 10);
    while(localStorage.getItem(getColor(r))!= player())
        r = Math.floor(Math.random() * 10);
    return getColor(r);
}

function getPersonnageColor(){
    return color;
}
