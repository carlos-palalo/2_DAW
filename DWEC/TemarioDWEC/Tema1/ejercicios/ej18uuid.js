//Generar uuid
function random(min, max) {
    return Math.floor((Math.random() * (max - min + 1)) + min);
}

var cantidad = 100;
var vector = Array(cantidad);
var uuid;

for (let j = 0; j < cantidad; j++) {
    uuid = "";
    uuid += "{";
    for (let i = 0; i < 32; i++) {
        if (i == 8 || i == 12 || i == 16 || i == 20) {
            uuid += "-";
        }
        uuid += random(0, 15).toString(16);
    }
    uuid += "}";

    if (j == 0)
        vector[j] = uuid.toUpperCase();
    else {
        for (let z = 0; z < j; z++) {
            if (vector[z] == uuid) {
                console.log("Error. UUID Repetido!");
                return;
            } else {
                vector[j] = uuid.toUpperCase();
            }
        }
    }
}

console.log("-------------- UUID Generados -------------")
console.log(vector);