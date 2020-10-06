//calcular el tiempo transcurrido entre dos fechas (18:00 13-Sept a 9:00 6-Oct) Agrupar por días
var fecha1 = new Date();
fecmdcha1.setMonth(8);
fecha1.setHours(18, 0, 0, 0);
fecha1.setDate(13);
console.log("Fecha 1: " + fecha1.toLocaleString());

var fecha2 = new Date();
fecha2.setMonth(7);
fecha2.setHours(9, 0, 0, 0);
fecha2.setDate(6);
console.log("Fecha 2: " + fecha2.toLocaleString());

var diferencia = Math.abs(fecha2 - fecha1);
var diffDia = Math.floor(diferencia / (1000 * 60 * 60 * 24));
diferencia -= diffDia * 1000 * 60 * 60 * 24;

var diffHora = Math.floor(diferencia / (1000 * 60 * 60));
diferencia -= diffHora * 1000 * 60 * 60;

var diffMin = Math.floor(diferencia / (1000 * 60));
diferencia -= diffMin * 1000 * 60;

var diffSeg = Math.floor(diferencia / 1000);

console.log("Diferencia: " + diffDia + " días, " + diffHora + " horas, " + diffMin + " minutos, " + diffSeg + " segundos.");