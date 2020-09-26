//un array de X dimensiones
//ordenarlos numericamente

var loto = Array(1000);
var num;

function random(min, max) {
    return Math.floor((Math.random() * (max - min + 1)) + min);
}

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

console.log(loto);