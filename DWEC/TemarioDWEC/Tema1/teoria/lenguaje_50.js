//lenguaje_50 - Funciones flecha (Básico)

//Ejemplo básico 1
var suma1 = (x,y) => x + y;
console.log("Ejemplo1: " + suma1(5,7)); //12. Retorno directo


//Ejemplo básico 2 
var suma2 = (x,y) => { x + y; }
console.log("\nEjemplo2: " + suma2(5,7)); //undefined. Al cerrar con corchetes no hay retorno directo.


//Ejemplo básico 3
var suma3 = (x,y) => { return x + y; }
console.log("\nEjemplo3: " + suma3(5,7)); //12. Al cerrar con corchetes será necesario devolver valor.


//Ejemplo básico 4
var suma4 = (x,y) => {
	var resultado;
	resultado = x + y;
	return resultado;
}
console.log("\nEjemplo4: " + suma4(5,7)); //12. Puede haber varias sentencias.


//Ejemplo básico 5
var cuadrado1 = (x) => x * x;
var cuadrado2 = x => x * x;
//var suma5 = x,y => x + y; //Error de sintaxis. Varios parámetros requieren paréntesis
console.log("\nEjemplo5: " + cuadrado1(3) + " - " + cuadrado2(5)); //9,25. Con un argumento los parámetros son opcionales


//Ejemplo básico 6
var suma6 = () => 5 + 4;
console.log("\nEjemplo6: " + suma6()); //9. Sin argumentos es necesario poner paréntesis