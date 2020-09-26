//lenguaje_45.js - Funciones: Hoisting

//El hosting con las funciones funciona con las declaraciones pero no con las expresiones
var a=4;

console.log(cuadrado(a));
//console.log(cubo(a)); //ERROR


//Se sube al principio
function cuadrado(x) {
	return x*x;
}

			
//No se sube
var cubo = function (x) {
	return x*x*x;
};