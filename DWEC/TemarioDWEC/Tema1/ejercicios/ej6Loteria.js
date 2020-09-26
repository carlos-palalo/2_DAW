//num entre 1 y 49
//7,24,27,30,35,42
//1,11,19,22,30,39 ... [[],[],...,[]]
//hacer un array de arrays aleatorio de 0-999
//y sacar cuantas personas han acertado uno en concreto
//comprobar que no se metan mismos valores

function random(min, max) {
    return Math.floor((Math.random() * (max - min + 1)) + min);
}

var loto = Array(1000);
var num;

for (var i = 0; i < 1000; i++) {
    loto[i] = Array(6);
    for (var j = 0; j < 6; j++) {
        do {
            num = random(1, 49);
            if (loto[i].indexOf(num) == -1) {
                loto[i][j] = num;
                break;
            }
        } while (true);
    }
    loto[i].sort((a, b) => a - b);
}

var ganador = Array(6);
for (var i = 0; i < 6; i++) {
    do {
        num = random(1, 49);
        if (ganador.indexOf(num) == -1) {
            ganador[i] = num;
            break;
        }
    } while (true);
}
ganador.sort((a, b) => a - b);

var aux = 0;
for (var i = 0; i < 1000; i++) {
    var cont = 0;
    for (var j = 0; j < 6; j++) {
        if (ganador[j] == loto[i][j]) {
            cont++
        }
        if (cont == 6) {
            aux++;
        }
    }
}
console.log("Boleto ganador: " + ganador + ". Hay " + aux + " premiados.");