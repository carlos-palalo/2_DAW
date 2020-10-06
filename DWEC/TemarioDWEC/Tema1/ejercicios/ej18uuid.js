//Generar uuid
function random(min, max) {
    return Math.floor((Math.random() * (max - min + 1)) + min);
}
var cantidad = 100;
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
    uuid +="}";
    console.log(uuid);
}