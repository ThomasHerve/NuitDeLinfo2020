/**
 * Pour utiliser : inclure le script sur une page avec 
 *  <script type="text/javascript" src="js/LeetConvert.js">
 * et ajouter le tag "leetable" aux div concernés
 * 
 */



var leeted = false;
var copie = [];

document.addEventListener('keydown', function(event) {
  if(event.keyCode == 37) {
    InitLeet(classicLeet);
  }
  else if(event.keyCode == 38) {
    InitLeet(simpleLeet);
  }
  else if(event.keyCode == 39) {
    InitLeet(hardLeet);
  }
  else if(event.keyCode == 40) {
    InitLeet(revert);
  }
});

function InitLeet(leet){
  var divs = document.querySelectorAll('[id=leetable]');

  if(!leeted){
    for(var i = 0; i < divs.length; i++){
      copie.push(divs[i].innerHTML);
      divs[i].innerHTML = leet(divs[i].innerHTML);
    }
    leeted = true;

  }else{
    for(var i = 0; i < copie.length; i++){
      divs[i].innerHTML = leet(copie[i]);
    }
    if(leet == "revert"){
      copie = [];
      leeted = false;
    }
  }
}

function revert(text){
  return text;
}

function classicLeet(text) {
    text = text.toUpperCase();
    text = text.replaceAll("A", "4")
    text = text.replaceAll("B", "8")
    //text = text.replaceAll("C", "")
    //text = text.replaceAll("D", "")
    text = text.replaceAll("E", "3")
    //text = text.replaceAll("F", "")
    text = text.replaceAll("G", "6")
    //text = text.replaceAll("H", "")
    text = text.replaceAll("I", "1")
    //text = text.replaceAll("J", "")
    //text = text.replaceAll("K", "")
    //text = text.replaceAll("L", "")
    //text = text.replaceAll("M", "")
    //text = text.replaceAll("N", "")
    text = text.replaceAll("O", "0")
    text = text.replaceAll("P", "9")
    //text = text.replaceAll("Q", "")
    text = text.replaceAll("R", "2")
    text = text.replaceAll("S", "5")
    text = text.replaceAll("T", "7")
    //text = text.replaceAll("U", "")
    //text = text.replaceAll("V", "")
    //text = text.replaceAll("W", "")
    //text = text.replaceAll("X", "")
    //text = text.replaceAll("Y", "")
    //text = text.replaceAll("Z", "")

  
return text;
}

function simpleLeet(text) {
        text = text.toUpperCase();
        text = text.replaceAll("A", "4")
        text = text.replaceAll("B", "8")
        text = text.replaceAll("C", "(")
        //text = text.replaceAll("D", "")
        text = text.replaceAll("E", "3")
        text = text.replaceAll("F", "ƒ")
        text = text.replaceAll("G", "6")
        text = text.replaceAll("H", "#")
        text = text.replaceAll("I", "!")
        text = text.replaceAll("J", ";")
        text = text.replaceAll("K", "X")
        text = text.replaceAll("L", "1")
        //text = text.replaceAll("M", "")
        text = text.replaceAll("N", "%")
        text = text.replaceAll("O", "0")
        text = text.replaceAll("P", "9")
        //text = text.replaceAll("Q", "")
        text = text.replaceAll("R", "®")
        text = text.replaceAll("S", "5")
        text = text.replaceAll("T", "7")
        text = text.replaceAll("U", "µ")
        //text = text.replaceAll("V", "")
        //text = text.replaceAll("W", "")
        text = text.replaceAll("X", "*")
        text = text.replaceAll("Y", "¥")
        text = text.replaceAll("Z", "2")

      
    return text;
  }
  
function hardLeet(text) {
    text = text.toUpperCase();
    text = text.replaceAll("A", "/-\\")
    text = text.replaceAll("B", "|3")
    text = text.replaceAll("C", "(")
    text = text.replaceAll("D", "[)")
    text = text.replaceAll("E", "€")
    text = text.replaceAll("F", "/=")
    text = text.replaceAll("G", "(_+")
    text = text.replaceAll("H", "(-)")
    text = text.replaceAll("I", "!")
    text = text.replaceAll("J", "</")
    text = text.replaceAll("K", "|<")
    text = text.replaceAll("L", "|_")
    text = text.replaceAll("M", "(\\/)")
    text = text.replaceAll("N", "(\\)")
    text = text.replaceAll("O", "()")
    text = text.replaceAll("P", "|>")
    text = text.replaceAll("Q", "()_")
    text = text.replaceAll("R", "|?")
    text = text.replaceAll("S", "5")
    text = text.replaceAll("T", "7")
    text = text.replaceAll("U", "(_)")
    text = text.replaceAll("V", "\\/")
    text = text.replaceAll("W", "\\/\\/")
    text = text.replaceAll("X", "><")
    text = text.replaceAll("Y", "`/")
    text = text.replaceAll("Z", "2")
    return text;
  }