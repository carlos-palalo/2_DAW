//lenguaje_30.js - Arrays: Propiedad length de lectura y escritura

var festivos = ["Santos","Navidad","Constitución"]; //3 elementos

//La propiedad length es de lectura y escritura
console.log(festivos.length);
console.log(festivos[2]);

//Se amplía el array
festivos.length=10;
console.log(festivos.length);
console.log(festivos[7]); //Valor no definido
console.log(festivos[45]); //valor no definido

//Se reduce el array
festivos.length=2;
console.log(festivos.length);

//Al reducirse los elementos se borran
console.log(festivos[2]);