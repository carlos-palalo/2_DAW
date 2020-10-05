//lenguaje_69.js - Ejercicio de expresiones regulares: A partir de un texto almacenar en 5 arrays diferentes las palabras de una, dos, tres cuatro, cinco letras o más de cinco</h1>

var texto = "Un texto es el la una composición de signos codificados en un sistema de escritura (como un alfabeto) que forma una unidad de sentido. Su tamaño puede ser variable. También es texto una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque ¡no tienen sentido! para cualquier persona, sí puede ser descifrado por su destinatario original. En otras palabras, a un texto es un entramado; de signos con una intención comunicativa que adquiere sentido en determinado contexto. ¿Es cierto? Es complicado.";
			
console.log("TEXTO ORIGINAL: " + texto);

texto = texto.replace(/(;|,|\(|\)|\.|¿|\?|\¡|\!)/g, ""); //Quito caracters especiales
texto = texto.replace(/\s/g, "  ");
texto = " " + texto + " ";

console.log("TEXTO SIN CARACTERES DE PUNTUACIÓN: " + texto);

var exprUno=/\s[A-Za-z]{1}\s/g;
var arrayUno=texto.match(exprUno);

var exprDos=/\s[A-Za-z]{2}\s/g;
var arrayDos=texto.match(exprDos);

var exprTres=/\s[A-Za-z]{3}\s/g;
var arrayTres=texto.match(exprTres);

var exprCuatro=/\s[A-Za-z]{4}\s/g;
var arrayCuatro=texto.match(exprCuatro);

var exprCinco=/\s[A-Za-z]{5}\s/g;
var arrayCinco=texto.match(exprCinco);

var exprMas5=/\s[A-Za-zó]{6,}\s/g;
var arrayMas5=texto.match(exprMas5);

console.log("Número de palabras de una letra: " + arrayUno.length);
console.log("Número de palabras de dos letras: " + arrayDos.length);
console.log("Número de palabras de tres letras: " + arrayTres.length);
console.log("Número de palabras de cuatro letras: " + arrayCuatro.length);
console.log("Número de palabras de cinco letras: " + arrayCinco.length);
console.log("Número de palabras de más de cinco letras: " + arrayMas5.length);

console.log("Palabras de una letra: " + arrayUno);
console.log("Palabras de dos letras: " + arrayDos);
console.log("Palabras de tres letras: " + arrayTres);
console.log("Palabras de cuatro letras: " + arrayCuatro);
console.log("Palabras de cinco letras: " + arrayCinco);
console.log("Palabras de más de cinco letras: " + arrayMas5);