//objetos_11.js - Propiedades de sólo lectura

var coche = {
    puertas: 4
}

Object.defineProperty(coche, "tiempoGarantia", {
    value:2,
    writable:true //Cambiar a true
});


console.log(coche.tiempoGarantia);
coche.tiempoGarantia = 5;
console.log(coche.tiempoGarantia);
