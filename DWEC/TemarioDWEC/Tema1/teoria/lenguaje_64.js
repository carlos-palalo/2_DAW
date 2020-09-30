//lenguaje_64.js - Expresiones regulares: Metacaracteres


//Los metacaracteres en una expresión regular van precedidos por \

//  \. --> El carácter punto
console.log("\\. --> El carácter punto");
var expresion = /\./;
console.log(expresion.test("Hola a todos.")); //true
console.log(expresion.test("Hola a todos")); //false



//  \w --> Un carácter entre a-z, A-Z, 0-9, _
console.log("\\w --> Un carácter a-z, A-Z, 0-9, _");
var expresion = /\w/;
console.log(expresion.test("Hola a los 2?")); //true
console.log(expresion.test("?-. *")); //false



//  \W --> Un carácter distinto de a-z, A-Z, 0-9, _
console.log("\\W --> Un caracter distinto de a-z, A-Z, 0-9, _");
var expresion = /\W/;
console.log(expresion.test("¿?¡!$[] {}a")); //true
console.log(expresion.test("Hola")); //false



//  \d --> Un dígito
console.log("\\d --> Un número");
var expresion = /\d/;
console.log(expresion.test("Hola a los 2.")); //true
console.log(expresion.test("Hola a los dos.")); //false



//  \D --> Un no dígito
console.log("\\D --> Un carácter que no sea un dígito");
var expresion = /\D/;
console.log(expresion.test("Hola a los do3s.")); //true
console.log(expresion.test("123")); //false



//  \s --> Un blanco
console.log("\\s --> Un carácter blanco (espacio, tabulador, nueva línea...)");
var expresion = /\s/;
console.log(expresion.test("Hola a los 2.")); //true
console.log(expresion.test("Holaalosdos.")); //false



//  \S --> Un carácter no blanco
console.log("\\S --> Un carácter no blanco");
var expresion = /\S/;
console.log(expresion.test("Hola a los 2.")); //true
console.log(expresion.test(" 	")); //false



//  \b --> Un carácter o cadena al principio o al final de una palabra
console.log("\\b --> Un carácter o cadena al principio (\\b...)o al final (...\\b)de una palabra");
var expresion = /\blo/;
console.log(expresion.test("Hola a los tres")); //true
console.log(expresion.test("Hola a las cuatro")); //false
var expresion = /os\b/;
console.log(expresion.test("Hola a los tres")); //true
console.log(expresion.test("Hola a las cuatro")); //false



//  \B --> Un carácter o cadena pero que no esté al principio o al final de una palabra
console.log("\\B --> Un carácter o cadena que  esté en la cadena pero no al principio (\\B...) o al final (...\\B) de una palabra");
var expresion = /\Bta/; //no al principio
console.log(expresion.test("Estamos en clase")); //true
console.log(expresion.test("Hola a los 2.")); //false
console.log(expresion.test("Holta a los 2.")); //true
var expresion = /ta\B/; //no al final
console.log(expresion.test("Esta en clase")); //false
console.log(expresion.test("Hola a los 2.")); //false
console.log(expresion.test("taHola a los 2.")); //true


			
//  \n --> nueva línea
console.log("\\n --> Un carácter de nueva línea");
var expresion = /\n/;
console.log(expresion.test("Hola \n a los tres"));
console.log(expresion.test("Hola a las cuatro"));



//  \r --> retorno de carro
console.log("\\r --> Un carácter de nueva línea");
var expresion = /\r/;
console.log(expresion.test("Hola \r a los tres"));
console.log(expresion.test("Hola a las cuatro"));



//  \t --> tabulador
console.log("\\t --> Un tabulador");
var expresion = /\t/;
console.log(expresion.test("Hola 		a los tres"));
console.log(expresion.test("Hola a las cuatro"));