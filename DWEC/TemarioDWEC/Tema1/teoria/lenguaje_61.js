//lenguaje_61.js - Ejercicio de cadenas: Escribir un texto al revés a nivel de palabras y de letras

var frase = "Esto es un texto para hacer ejercicios con cadenas. Se realizará una transformación sobre el mismo. Se emplearán métodos del objeto String.";
var fraseFinal = "";

var array_palabras=frase.split(" ");
			
console.log(frase);

console.log("\nFrase al revés por palabras: ");
for(i=array_palabras.length-1;i>=0;i--)	{
	fraseFinal += array_palabras[i]+" ";
}
console.log(fraseFinal);

fraseFinal = "";
console.log("\nFrase al revés por caracteres: ");
for(i=frase.length-1;i>=0;i--) {
	fraseFinal += frase.charAt(i);
}
console.log(fraseFinal);