//lenguaje_08.js - Introducción al hoisting

/* Hoisting en JavaScript es el término empleado para describir el hecho de mover todas las
declaraciones de variables al comienzo del bloque de alcance correspondiente (en la parte
superior del script o de la función actual).
El Hoisting se realiza con las declaraciones, no con inicializaciones. */

console.log(variable1); // undefined
var variable1 = 10;
console.log(variable1);

/* //Código en el que se convierte el anterior
var variable1;
console.log(variable1); // undefined
variable1 = 10;
console.log(variable1); //10
*/


console.log(variable2); // CORRECTO --> El bloque no delimita el ámbito
{
	console.log(variable2); // CORRECTO
	var variable2 = 3;
	console.log(variable2);
}


//Hoisting con funciones: La podemos usar antes de declararla
saludar("Hola");

function saludar(_saludo) {
	console.log(_saludo);
}