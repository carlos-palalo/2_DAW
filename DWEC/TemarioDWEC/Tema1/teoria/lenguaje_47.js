//lenguaje_47.js - Funciones recursivas

//Una función recursiva se llama a sí misma
function factorial(n) {
	if(n==0) {
		return 1;
	}
	else
		return n * factorial(n-1);
}

var numero = 5;
console.log("Factorial de " + numero + ": " + factorial(numero));