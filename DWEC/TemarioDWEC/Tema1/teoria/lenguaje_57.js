//lenguaje_57.js - Ejercicio de cadenas: Primera letra de cada palabra a mayúsculas

var texto = "Esto es un texto para hacer ejercicios con cadenas. Se realizarán transformaciones sobre el mismo. Se emplearán métodos del objeto String.";
var tFinal = "";
var lista = texto.split(" ");


for(i=0;i<lista.length;i++) {
	tFinal += lista[i].charAt(0).toUpperCase() + lista[i].slice(1) + " ";
}

console.log(texto);
console.log("*************");
console.log(tFinal);