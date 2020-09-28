var texto = "En la clase de informática tenemos ordenadores.";
var tFinal = "";
var lista = texto.split(" ");

for (var i = 0; i < lista.length; i += 2) {
    lista[i] = lista[i].toUpperCase();
}

for (var i = 0; i < lista.length; i++) {
    tFinal += lista[i] + " ";
}

console.log(tFinal);