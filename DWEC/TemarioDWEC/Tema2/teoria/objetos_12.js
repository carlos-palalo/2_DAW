//objetos_12.js - Propiedades configurables

var coche = {
    puertas: 4
}

Object.defineProperty(coche, "tiempoGarantia", {
    value:2,
    writable:true,
    configurable:false //cambiar a true
});



coche.tiempoGarantia = 5;
delete coche.tiempoGarantia; //No se puede eliminar al ser el descriptor false; probar cambiandolo a true
console.log(coche.tiempoGarantia);

//Configurable a true indica que se puede eliminar y modificar el descriptor