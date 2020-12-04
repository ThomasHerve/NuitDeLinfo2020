const colors = [
    "Red",
    "Orange",
    "Yellow",
    "Lime",
    "Green",
    "Cyan",
    "Blue",
    "Violet",
    "Magenta",
    "Pink"
]
const colorangle = [
    "-10",
    "40",
    "70",
    "100",
    "130",
    "180",
    "240",
    "270",
    "300",
    "330"

]


const CREWMATE = "crewmate";
const IMPOSTER = "imposter";
const DEAD = "dead";
const KILLDELAY = 20000;


const neutralQuote = [
"Je suis resté à MedBay. Il y avait du monde. Puis je suis passé en décontamination.",
"J'ai perdu beaucoup de temps sur les météores.",
"J'ai fait le download, ca prend beaucoup de temps",
"J'ai regardé les cams tout le long, rien à signaler.",
"Je me suis baladé surtout, j'ai fini toutes mes taches.",
"J'ai vérifié le sensor et rien d'anormal",
"J'ai passé la plus grande partie de mon temps a admin. Je n'ai rien vu de spécial"
]

const positiveQuote = [
    "J'ai fait le scanner, puis Specimen. Il y avait @ avec moi. Je ne pense pas que soit lui.",
    "On a réparé les lights avec @. Puis je suis allé checker les cameras.",
    "J'ai vu les cams allumés tout du long. J'y suis passé, c'était @.",
    "J'ai fait mes taches au lab avec @.",
    "Je suis aller dans la salle du moteur. Il y avait @ avec moi"
]
const positive2Quote = [
    "On est parti Specimen avec @ et @. On est resté bloqué au refectoire, donc on a mis plus de temps.",
    "Je suis resté aux caméras, j'ai vu @ et @ tout du long.",
    "J'ai réparé le réacteur avec l'aide de @ et @",
    "On a pris un petit dejeuner à la cafet avec @ et @. Il y avait des tartines."
]
const negativeQuote = [
    "J'ai vu une vent s'ouvrir. Il me semble que c'etait la couleur @",
    "J'ai croisé @ qui partait en direction de storage il y a une minute. Pile la ou il y a eu le kill ...",
    "@ me parait louche, il a passé son temps à courir partout !",
    "Je n'ai pas du tout vu @ ces derniers temps, c'est très bizarre.",
    "@ a report le cadavre. Mais il était tout seul, et on était tous ensemble les autres ...",
    "J'ai vu @ tuer sous mes yeux ! Quelle horreur ! Vous devez me croire c'est un imposteur !"
]

const negative2Quote = [
    "J'ai vu @ passer par une vent. Ce qui est bizarre c'est que @ était la aussi mais n'a rien dit.",
    "S'il y a eu double kill, @ et @ devait être les seuls tueurs possibles.",
    "@ défend beaucoup @ sans raison apparente. Ils sont peut être copains ..."
]
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

function getQuote(a){
    switch(a){
        case 0 : return neutralQuote[Math.floor(Math.random() * neutralQuote.length)];
        case 1 : return positiveQuote[Math.floor(Math.random() * positiveQuote.length)];
        case 2 : return positive2Quote[Math.floor(Math.random() * positive2Quote.length)];
        case -1 : return negativeQuote[Math.floor(Math.random() * negativeQuote.length)];
        case -2 : return negative2Quote[Math.floor(Math.random() * negative2Quote.length)];
        default:return null;
    }
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