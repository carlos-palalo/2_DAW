//lenguaje_62.js - Expresiones regulares: Básico


//Formas de definir una expresión regular
//1 --> Literal
//var expresion1 = /patrón/modificadores;
//2 --> Función constructora del objeto RegExp. Usarlo cuando se desconozca inicialmente el patrón, deba obtenerlo de otra fuente (usuario) o cuando se sepa que va a cambiar
//var expresion2 = new RegExp(patrón,modificadores);

//Patrón --> Formato de la expresión regular
//Modificadores(opcional) --> Comportamiento de la expresión regular
//	g --> El patrón se aplica a toda la cadena en lugar de detenerse al encontrar la primera correspondencia
//	i --> Ignora mayúsculas y minúsculas
//	m --> El patrón sigue buscando después de encontrar el final de línea
//  y --> Sticky
//  u --> Unicode

var expresion1 = /[jc]ava/g;
var expresion2 = /[A-Z]/;
var expresion3 = /[abc][0-9]/ig;
var expresion4 = new RegExp("[aeiou]","m");
var expresion5 = new RegExp("[13567]");
var expresion6 = /\u{73}/u;


//PROPIEDADES DE LA EXPRESIÓN REGULAR: source, flags, global, ignoreCase, multiline, unicode, lastIndex

//source --> Cadena de texto que muestra la expresión regular
console.log("SOURCE");
console.log(expresion1.source);
console.log(expresion2.source);
console.log(expresion3.source);


//flags --> Cadena de texto que muestra los modificadores existentes
console.log("FLAGS");
console.log(expresion1.flags);
console.log(expresion2.flags);
console.log(expresion3.flags);


//global --> Booleano que indica si se usó el modificador g
console.log("GLOBAL");
console.log(expresion1.global);
console.log(expresion2.global);


//ignoreCase --> Booleano que indica si se usó el modificador i
console.log("IGNORECASE");
console.log(expresion2.ignoreCase);
console.log(expresion3.ignoreCase);


//multiline --> Booleano que indica si se usó el modificador m
console.log("MULTILINE");
console.log(expresion3.multiline);
console.log(expresion4.multiline);


//unicode --> Booleano que indica si se usó el modificador u
console.log("UNICODE");
console.log(expresion3.unicode);
console.log(expresion6.unicode);