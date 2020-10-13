//lenguaje_79.js - Tiempo transcurrido entre dos fechas

var fechaAnterior = new Date(2020,9,7);
var fechaActual = new Date();

var milisegundos = Math.abs(fechaActual.getTime() - fechaAnterior.getTime());

const msMinuto = 1000 * 60;
const msHora = msMinuto * 60;
const msDia = msHora * 24;

var dias = Math.floor(milisegundos/msDia);
milisegundos = milisegundos - dias*msDia;

var horas = Math.floor(milisegundos/msHora);
milisegundos = milisegundos - horas*msHora;

var minutos = Math.floor(milisegundos/msMinuto);
milisegundos = milisegundos - minutos*msMinuto;

var segundos = Math.floor(milisegundos/1000);

console.log("Días: " + dias);
console.log("Horas: " + horas);
console.log("Minutos: " + minutos);
console.log("Segundos: " + segundos);