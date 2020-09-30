//lenguaje_58.js - Ejercicio de cadenas: Alternar palabras en mayúsculas con palabras en minúsculas

var texto = "Esto es un texto para hacer ejercicios con cadenas. Se realizarán transformaciones sobre el mismo. Se emplearán métodos del objeto String.";
var tFinal = "";
var lista = texto.split(" ");

for(i=0;i<lista.length;i++)	{
	if(i%2==0)
		tFinal += lista[i].toUpperCase() + " ";
	else
		tFinal += lista[i].toLowerCase() + " ";
}

console.log(texto);
console.log("*************");
console.log(tFinal);