//lenguaje_44.js - Funciones: Definición condicional

var i=2; //Cambiar a i=1 y comprobar
var cuadrado;
			
if(i>1) {
	cuadrado = function (x) {
		return x*x;
	}
}

if(i>1) {
	function cubo(x) {
		return x*x*x;
	}
}

console.log(cuadrado(i));
console.log(cubo(i));