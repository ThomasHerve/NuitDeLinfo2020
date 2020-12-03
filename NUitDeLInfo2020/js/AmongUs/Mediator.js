const colors = [
    'red',
    'blue',
    'pink',
    'green',
    'black',
    'white',
    'orange',
    'yellow',
    'violet',
    'cyan'
]

function InitGame(){
    var r1 = Math.floor(Math.random() * 10);
    var r2 = Math.floor(Math.random() * 10);
    while(rnd2 == rnd1)
        rnd2 = Math.floor(Math.random() * 10);

    for (let i = 0; i < colors.length; i++) {
        localStorage.setItem(colors[i], i!=r1 && i!=r2 );
        
    }



}