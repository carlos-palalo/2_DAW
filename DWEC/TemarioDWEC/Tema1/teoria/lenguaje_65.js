//lenguaje_65.js - Expresiones regulares: Caracteres especiales

// . --> Cualquier carácter salvo fin de línea
console.log(". --> Cualquier carácter salvo fin de línea");
var expresion = /./;
console.log(expresion.test("Hola a los 2.")); //true
console.log(expresion.test("casa\n")); //true
console.log(expresion.test("\n")); //false
			

// [] --> Conjunto de caracteres
console.log("[] --> Conjunto de caracteres");
var expresion = /[abc]/;
console.log(expresion.test("casa")); //true
console.log(expresion.test("perro")); //false
var expresion = /[a,b,c]/;
console.log(expresion.test("casa")); //true
console.log(expresion.test("perro")); //false
var expresion = /[d-f]/;
console.log(expresion.test("casa")); //false
console.log(expresion.test("perro")); //true
var expresion = /[5-9]/;
console.log(expresion.test("381")); //true
console.log(expresion.test("314")); //false
var expresion = /[a-c,1-3]/;
console.log(expresion.test("381")); //true
console.log(expresion.test("ghj")); //false


// [^] --> Negar un conjunto de caracteres
console.log("[^] --> Negar un conjunto de caracteres");
var expresion = /[^abc]/;
console.log(expresion.test("caca")); //false
console.log(expresion.test("cacas")); //true
console.log(expresion.test("perro")); //true
var expresion = /[^a,c,s]/; //El negador afecta a todo el contenido de los corchetes
console.log(expresion.test("casa")); //false
console.log(expresion.test("perro")); //true
var expresion = /[^d-f]/;
console.log(expresion.test("fede")); //false
console.log(expresion.test("perro")); //true
var expresion = /[^5-9]/;
console.log(expresion.test("987")); //false
console.log(expresion.test("3146")); //true
var expresion = /[^a-c,1-3]/; //El negador afecta a las dos partes
console.log(expresion.test("12")); //false
console.log(expresion.test("ghj")); //true


// (|) --> Valores alternativos
console.log("(|) --> Valores alternativos");
var expresion = /(p|l)aca/;
console.log(expresion.test("taca")); //false
console.log(expresion.test("paca")); //true
console.log(expresion.test("laca")); //true