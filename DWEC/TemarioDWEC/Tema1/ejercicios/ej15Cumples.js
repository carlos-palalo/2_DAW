//11 marzo
//decir qué días de la semana van a ser los siguientes 5 cumpleaños
const dias = ['domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado'];
var fecha = new Date(2020, 2, 11);

for (var i = 0; i <= 5; i++) {
    fecha.setFullYear(2020 + i);
    console.log("Mi cumpleaños en el año " + fecha.getFullYear() + " cae en " + dias[fecha.getDay()]+".");
}