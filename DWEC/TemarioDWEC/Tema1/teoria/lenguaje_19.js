//lenguaje_19.js - Otros usos de los operadores lógicos

//Ejecución condicional sin uso de una sentencia IF
var valorVerdadero = true;
var valorFalso = false;

valorVerdadero && console.log("1. true && SENTENCIA EJECUTADA");

valorFalso && console.log("2. false && SENTENCIA NO EJECUTADA");

valorVerdadero || console.log("3. true || SENTENCIA NO EJECUTADA");
			
valorFalso || console.log("4. false || SENTENCIA EJECUTADA");
			

//Asignación condicional de valores a variables;
var valor1 = valorVerdadero && valorFalso;
console.log("5. valor1 = " + valor1);

var valor2 = valorVerdadero || valorFalso;
console.log("6. valor2 = " + valor2);

var valor3 = valorVerdadero && 4+8;
console.log("7. valor3 = " + valor3);

var valor4 = valorFalso && 4+8;
console.log("8. valor4 = " + valor4);

var valor5 = valorVerdadero || 4+8;
console.log("9. valor5 = " + valor5);

var valor6 = valorFalso || 4+8;
console.log("10. valor6 = " + valor6);