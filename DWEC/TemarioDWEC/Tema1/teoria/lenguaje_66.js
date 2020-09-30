//lenguaje_66.js - Expresiones regulares: Cuantificadores

// n+ --> Contiene al menos una vez el carácter n
console.log("n+ --> Contiene al menos una vez el carácter n");
var expresion = /a+/;
console.log(expresion.test("Hola")); //true
console.log(expresion.test("perro")); //false
console.log(expresion.test("aadflg")); //true
var expresion = /la+/; 
console.log(expresion.test("Hola")); //true
console.log(expresion.test("perro")); //false
console.log(expresion.test("aadflga")); //false



// n* --> Contiene cero o más veces n
console.log("n* --> Contiene cero o más veces el carácter n");
var expresion = /a*/;
console.log(expresion.test("Hola")); //true
console.log(expresion.test("perro")); //true
console.log(expresion.test("")); //true
console.log(expresion.test("aadfg")); //true
var expresion = /la*/;
console.log(expresion.test("Hola")); //true
console.log(expresion.test("perro")); //false
console.log(expresion.test("casa")); //false
console.log(expresion.test("aadflga")); //true
var expresion = /(la)*/;
console.log(expresion.test("Hola")); //true
console.log(expresion.test("perro")); //true
console.log(expresion.test("aadflga")); //true



// n? --> Contiene cero o una vez n
console.log("n? --> Contiene cero o una vez n");
var expresion = /a?/;
console.log(expresion.test("Hola")); //true
console.log(expresion.test("aaaahhh")); //true
console.log(expresion.test("")); //true
console.log(expresion.test("dfg")); //true
var expresion = /la?/;
console.log(expresion.test("Hola")); //true
console.log(expresion.test("perro")); //false
console.log(expresion.test("aadflga")); //true
			


// n{x} --> Contiene x veces el carácter n
console.log("n{x} --> Contiene x veces seguidas el carácter n");
var expresion = /a{2}/;
console.log(expresion.test("aHola")); //false
console.log(expresion.test("aaaaahhh")); //true
console.log(expresion.test("holaa")); //true
			


// n{x,y} --> Contiene entre x e y veces el carácter n
console.log("n{x,y} --> Contiene entre x e y veces seguidas el carácter n");
var expresion = /a{2,4}/;
console.log(expresion.test("aHola")); //false
console.log(expresion.test("aaaaahhh")); //true
console.log(expresion.test("hola")); //false
			


// n{x,} --> Contiene x veces seguidas o más el carácter n
console.log("n{x,} --> Contiene x veces o más el carácter n");
var expresion = /a{2,}/;
console.log(expresion.test("aHola")); //false
console.log(expresion.test("aaaaahhh")); //true
console.log(expresion.test("hola")); //false
			


// n$ --> Contiene el carácter n al final
console.log("n$ --> Contiene el carácter n al final");
var expresion = /a$/;
console.log(expresion.test("aHola")); //true
console.log(expresion.test("aaaaahhh")); //false
console.log(expresion.test("hola")); //true
			


// ^n --> Contiene el carácter n al principio
console.log("^$ --> Contiene el carácter n al principio");
var expresion = /^a/;
console.log(expresion.test("aHola")); //true
console.log(expresion.test("aaaaahhh")); //true
console.log(expresion.test("hola")); //false
			


// Se combian los dos anteriores para pasar de contener a ser la cadena exacta
console.log("Se combian los dos anteriores para pasar de contener a ser la cadena exacta");
var expresion = /^casa$/;
console.log(expresion.test("casa"));
console.log(expresion.test("casacasa"));
console.log(expresion.test("la casa es bonita"));