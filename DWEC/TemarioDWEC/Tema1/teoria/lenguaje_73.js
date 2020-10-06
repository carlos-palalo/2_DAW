//lenguaje_73.js - Objeto Date: Básico

var fecha1 = new Date(); //Devuelve la fecha del sistema
var fecha2 = new Date(-347205675600);
var fecha3 = new Date("April 15, 2012 15:00:00"); //Fecha en formato cadena reconocible por el método parse
var fecha4 = new Date(2019,4); //año, mes (obligatorios, no da error si se omite el mes)
var fecha5 = new Date(2019,8,21,17,34,23,345);

/*console.log(fecha1.toString());
console.log(fecha2.toString());
console.log(fecha3.toString());
console.log(fecha4.toString());
console.log(fecha5.toString());*/

//Otras formas de ver la fecha: métodos toString
console.log(fecha1.toDateString()); //Formato americano
			
console.log(fecha1.toGMTString()); //Obsoleta
			
console.log(fecha1.toUTCString());
			
console.log(fecha1.toISOString());

var opciones = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
console.log(fecha1.toLocaleDateString('es-ES', opciones));

console.log(fecha1.toLocaleTimeString()); //La hora únicamente

console.log(fecha1.toLocaleString());