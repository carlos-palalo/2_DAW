var texto = "En la clase de informática tenemos ordenadores.";
var tFinal = "";
var lista = texto.split(" ");

for (var i = 0; i < lista.length; i++) {
    if (i % 2 == 0) {
        lista[i] = lista[i].toUpperCase();
    }
    tFinal += lista[i] + " ";
}
console.log(tFinal);