//lenguaje_76.js - Objeto Date: set

var fecha = new Date();
console.log("Fecha de partida: " + fecha.toString());

//setDate --> Establece el día del mes 1-31
fecha.setDate(8);
console.log("setDate(5): " + fecha.getDate());

//setFullYear --> Establece el año
fecha.setFullYear(2013);
console.log("setFullYear(2013): " + fecha.getFullYear());

//setHours --> Establece las horas 0-23
fecha.setHours(16);
console.log("setHours(16): " + fecha.getHours());

//setMilliseconds --> Establece los milisegundos
fecha.setMilliseconds(234);
console.log("setMilliseconds(234): " + fecha.getMilliseconds());

//setMinutes --> Establece los minutos 0-59
fecha.setMinutes(23);
console.log("setMinutes(23): " + fecha.getMinutes());

//setMonth --> Establece el mes 0-11
fecha.setMonth(3);
console.log("setMonth(3): " + fecha.getMonth());

//setSeconds --> Establece los segundos 0-59
fecha.setSeconds(34);
console.log("setSeconds(34): " + fecha.getSeconds());

console.log("Fecha final antes de setTime: " + fecha.toString());

//setTime --> Establece los milisegundos desde el 1 de enero de 1970
fecha.setTime(56456456645);
console.log("setTime(56456456645): " + fecha.getTime());

console.log("Fecha final: " + fecha.toString());