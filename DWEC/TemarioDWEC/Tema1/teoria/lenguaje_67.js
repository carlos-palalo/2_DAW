//lenguaje_67.js - Expresiones regulares: Métodos

//SEARCH
console.log("<h2>Método search</h2>");
console.log("<p>Este método recibe como parámetro una expresión regular y busca en la cadena una secuencia que coincida con dicha expresión.</p>");
var expresion = /\d\d\d/;
var cadena = "1-234-56-453-344-4-2-122";
var pos = cadena.search(expresion);
console.log("Cadena: :" + cadena + " --- Expresión regular: /\\d\\d\\d/");
console.log("Posición de la coincidencia: " + pos);
var expresion = /\d\d\d/g;
var cadena = "11-11-234-56-453-344-4-2-122";
var pos = cadena.search(expresion);
console.log("Cadena: :" + cadena + " --- Expresión regular: /\\d\\d\\d/g");
console.log("Posición de la coincidencia: " + pos + "<hr />");



//REPLACE
console.log("<h2>Método replace</h2>");
console.log("<p>Este método permite localizar una cadena dentro de otra y sustituirla por otra.</p>");
var expresion = /\d\d\d/;
var cadena = "1-234-56-453-344-4-2-122";
var nuevacadena = cadena.replace(expresion,"XXX");
console.log("Cadena: :" + cadena + " --- Expresión regular: /\\d\\d\\d/ --- Subcadena nueva: XXX");
console.log("Cadena obtenida: " + nuevacadena);
var expresion = /\d\d\d/g;
var cadena = "1-234-56-453-344-4-2-122";
var nuevacadena = cadena.replace(expresion,"XXX");
console.log("Cadena: :" + cadena + " --- Expresión regular: /\\d\\d\\d/g --- Subcadena nueva: XXX");
console.log("Cadena obtenida: " + nuevacadena + "<hr />");



//SPLIT
console.log("<h2>Método split</h2>");
console.log("<p>Divide una cadena de texto en un Array a partir de una expresión regular. Es similar al split de String.</p>");
var expresion = /\d\d\d/;
var cadena = "1-234-56-453-344-4-2-122";
var nuevoarray = cadena.split(expresion);
console.log("Cadena: :" + cadena + " --- Expresión regular: /\\d\\d\\d/");
console.log("Array: " + nuevoarray);
var expresion = /\d\d\d/g;
var cadena = "1-234-56-453-344-4-2-122";
var nuevoarray = cadena.split(expresion);
console.log("Cadena: :" + cadena + " --- Expresión regular: /\\d\\d\\d/g");
console.log("Array: " + nuevoarray + "<hr />");



//MATCH
console.log("<h2>Método match</h2>");
console.log("<p>Este método prueba si existe coincidencia y devuelve un array de coincidencias.</p>");
var expresion = /\d\d\d/;
var cadena = "1-234-56-453-344-4-2-122";
var nuevoarray = cadena.match(expresion);
console.log("Cadena: :" + cadena + " --- Expresión regular: /\\d\\d\\d/");
console.log("Array: " + nuevoarray);
var expresion = /\d\d\d/g;
var cadena = "11-11-234-56-453-344-4-2-122";
var nuevoarray = cadena.match(expresion);
console.log("Cadena: :" + cadena + " --- Expresión regular: /\\d\\d\\d/g");
console.log("Array: " + nuevoarray);