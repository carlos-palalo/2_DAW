//lenguaje_74.js - Objeto Date - now, parse y utc

var fecha1 = new Date(); //Devuelve la fecha del sistema
//Métodos de clase: now, parse y UTC --> Ambos devuelven los milisegundos desde 1/1/1970 (no un objeto Date)


//now --> actual
console.log("NOW");
var fecha6 = Date.now();
console.log(fecha6.toString());
console.log(new Date(fecha6).toString());


//parse --> texto reconocible como fecha
console.log("\n\nPARSE");
var fecha7 = Date.parse("1 2 2016"); //Se puede variar bastante
console.log(fecha7.toString());
console.log(new Date(fecha7).toString());

var fecha8 = Date.parse("qqr20176"); //Si no la reconoce devuelve NaN
console.log(fecha8.toString());
console.log(new Date(fecha8).toString());


//UTC
console.log("\n\nUTC");
var fecha9 = Date.UTC(2017,5,8,10,34);
console.log(fecha9.toString());
console.log(new Date(fecha9).toString());
console.log(new Date(fecha9).toUTCString());