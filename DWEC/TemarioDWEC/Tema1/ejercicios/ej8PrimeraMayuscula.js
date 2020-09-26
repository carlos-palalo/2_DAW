/*NO FUNCIONA*/
var texto = "Esto es una frase";
var tFinal = "";
var lista = texto.split(" ");

for (var i = 0; i < lista.length; i++) {
    tFinal += lista[i].charAt[0].toUpperCase() + lista[i].slice(1) + " ";
}

console.log(texto);
console.log("***************");
console.log(tFinal);