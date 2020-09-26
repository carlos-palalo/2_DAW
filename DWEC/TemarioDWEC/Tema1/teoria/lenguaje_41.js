//lenguaje_41.js - Funciones: Expresiones de función

//EXPRESIONES DE FUNCIÓN
//Con función anónima
var incrementarDos = function (x) { return x+2; }
console.log(incrementarDos(7));


//Con función nomimal
var calcularFactorial = function factorial(x) {
	if(x<1) {
		return 1;
	} else {
		return x * factorial(x-1);
	}
}
console.log(calcularFactorial(6));

//UTILIDAD DE USAR EXPRESIONES DE FUNCIONES --> PASAR UNA FUNCIÓN COMO ARGUMENTO