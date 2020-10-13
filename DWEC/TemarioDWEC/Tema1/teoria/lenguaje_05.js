//lenguaje_05 - Declaración de variables

/* Los nombres de las variables:
	-pueden contener letras, dígitos, subrayados (_) y dólares ($).
	-deben comenzar por una letra, subrayado o dólar.
	-son Case Sensitive.
	-no pueden ser palabras reservadas.	*/

var variable1; //Declaración explícita

//var 2variable2; //ERROR --> No puede comenzar por número
			
var _variable3 = 10; //Se puede iniciar la variable con un valor
			
var $variable4;
			
//var variable5@; //No puede contener caracteres no válidos
	
//var for; //ERROR --> No puede usarse una palabra reservada

//JavaScript es Case Sensitive. Las siguientes variables son distintas
var variable6 = 20; //Declaración explícita
var Variable6 = 30; //Declaración explícita

variable7 = 40; //Declaración implícita

var variable8, variable9; //Declaración de varias variables en la misma sentencia

var variable10 = "texto", variable11 = 50; //Declaración de varias variables en la misma sentencia con inicialización

let variable12 = 60; //Declaración de variables con let


console.log(variable1);
console.log(_variable3);
console.log($variable4);
console.log(variable6);
console.log(Variable6);
console.log(variable7);
console.log(variable8);
console.log(variable9);
console.log(variable10);
console.log(variable11);
console.log(variable12);
//console.log(variable13); //Error --> VARIABLE13 is not defined