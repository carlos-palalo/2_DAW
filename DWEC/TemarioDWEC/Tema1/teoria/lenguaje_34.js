//lenguaje_34.js - Identificación de un Array

var numeros = [4,0,3,4,7,3,5,8,1,8,8,0,2,3,1,2,5,7,3,2,5,1];
			
if(Array.isArray(numeros)) { //Método de constructor
	console.log("numeros es un array");
}

if(numeros instanceof Array) {
	console.log("numeros es un array");
}