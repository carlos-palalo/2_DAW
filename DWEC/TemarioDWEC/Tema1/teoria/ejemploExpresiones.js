console.log("/la*/");   //PRUEBA
var expresion = /la*/;
console.log(expresion.test("Hola"));
console.log(expresion.test("Perro"));
console.log(expresion.test("Pelé"));
console.log(expresion.test("lloro"));
var expresion = /^[0-9]{4,5}$/; //CODIGO POSTAL
console.log(expresion.test("1234"));
var expresion1 = /^[0-9]{4}[A-Z]{3}$/;  //MATRICULA EUROPEA
var expresion2 = /^[0-9]{4}[^AEIOUQY]{3}$/;
var cadena = "1234DBC";
console.log(expresion1.test(cadena) && expresion2.test(cadena));
var expresion1 = /^[A-Z]{1,2}\d{4}[A-Z]{1,2}$/;  //MATRICULA ANTIGUA
console.log(expresion1.test("AB1234RA"));
var exp1 = /^\d{8}[A-Z]$/;  //DNI
var exp1 = /^[679][0-9]{8}$/;    //TLF
var exp1 = /^ES\d{22}$/;    //CUENTA BANCARIA
var exp1 = /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/;   //CORREO 1
var exp1 = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;    //CORREO 2
var exp1 = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/; //CORREO 3