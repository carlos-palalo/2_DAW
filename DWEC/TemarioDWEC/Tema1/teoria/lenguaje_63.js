//lenguaje_63.js - Expresiones regulares: Declaración y propiedades

//ignoreCase
console.log("EJEMPLO DE IGNORECASE");
var expresion1 = /A/;
var expresion2 = /A/i;
console.log(expresion1.test("casa") ); //false
console.log(expresion2.test("casa") ); //true


//multiline
console.log("EJEMPLO DE MULTILINE");
var expresion3 = /^coche/;
var expresion4 = /^coche/m;
console.log(expresion3.test("casa\ncoche") ); //false
console.log(expresion4.test("casa\ncoche") ); //true


//unicode
console.log("EJEMPLO DE UNICODE");
var expresion5 = /\u{73}/; // Es la s
var expresion6 = /\u{73}/u;
console.log(expresion5.test("casa") ); //false
console.log(expresion6.test("casa") ); //true
console.log(expresion6.test("coche") );  //false


//lastIndex (propiedad)
var str = "The rain in Spain stays mainly in the plain.....";
var expresion7 = /ain/;
var expresion8 = /ain/g;
console.log(str );
console.log(expresion7.test(str) + " --> lastIndex: " + expresion7.lastIndex );
console.log(expresion7.test(str) + " --> lastIndex: " + expresion7.lastIndex );
console.log(expresion7.test(str) + " --> lastIndex: " + expresion7.lastIndex);

console.log(expresion8.test(str) + " --> lastIndex: " + expresion8.lastIndex ); //8
console.log(expresion8.test(str) + " --> lastIndex: " + expresion8.lastIndex ); //17
console.log(expresion8.test(str) + " --> lastIndex: " + expresion8.lastIndex ); //28
expresion8.lastIndex = 15;
console.log(expresion8.test(str) + " --> lastIndex: " + expresion8.lastIndex ); //28
console.log(expresion8.test(str) + " --> lastIndex: " + expresion8.lastIndex ); //43
console.log(expresion8.test(str) + " --> lastIndex: " + expresion8.lastIndex); //false,0
console.log(expresion8.test(str) + " --> lastIndex: " + expresion8.lastIndex);

			

//global
console.log("EJEMPLO DE GLOBAL");
var expresion10 = /ain/g; //Si se prescinde de la g se produce un bucle infinito
while (expresion10.test(str)==true) {
	console.log("'ain' encontrado. Índice ahora en: "+expresion10.lastIndex );
}