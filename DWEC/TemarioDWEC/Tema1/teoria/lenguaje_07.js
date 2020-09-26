//lenguaje_07.js - Ámbito de las variables

//Sólo existen en JavaScript el ámbito global y local
//No existe el ámbito de bloque (con let existe)

var varGlobal = 1;

function ejemploFuncion() {
	var varLocal = 2;

	var i = 0;
	while(i<1) { //No se abre un ámbito nuevo
		var varBloque = 3;
		console.log("Dentro del bloque:" + varGlobal + " - " + varLocal + " - " + varBloque);
		i++;
	}

	console.log("Fuera del bloque pero dentro de la función:" + varGlobal + " - " + varLocal + " - " + varBloque);
}

ejemploFuncion();

console.log("Variable global fuera de la función:" + varGlobal);
//console.log("Variable local fuera de la función:" + varLocal); //ERROR --> No definida
//console.log("Variable de bloque fuera de la función:" + varBloque); //ERROR --> No definida