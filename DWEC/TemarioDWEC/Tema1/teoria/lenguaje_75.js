//lenguaje_75.js - Objeto Date: get

var fecha = new Date();

console.log("Fecha de partida: " + fecha.toString());

//getDate --> Obtiene el día del mes 1-31
console.log("getDate(): " + fecha.getDate());

//getDay --> Obtiene el día de la semana 0-6 (0 es domingo)
console.log("getDay(): " + fecha.getDay());

//getFullYear --> Obtiene el año
console.log("getFullYear(): " + fecha.getFullYear());

//getHours --> Obtiene las horas 0-23
console.log("getHours(): " + fecha.getHours());

//getMilliseconds --> Obtiene los milisegundos 0-999
console.log("getMilliseconds(): " + fecha.getMilliseconds());

//getMinutes --> Obtiene los minutos 0-59
console.log("getMinutes(): " + fecha.getMinutes());

//getMonth --> Obtiene el mes 0-11
console.log("getMonth(): " + fecha.getMonth());

//getSeconds --> Obtiene los segundos 0-59
console.log("getSeconds(): " + fecha.getSeconds());

//getTime --> Obtiene los milisegundos desde el 1 de enero de 1970
console.log("getTime(): " + fecha.getTime());