//objetos_14.js - Objetos sellados: isSealed y seal
//No permite añadir aunque sí modificar valores
//No permite eliminar
//Marca todas las propiedades como no configurables


var coche = {
    puertas: 4
}


console.log("1 --> " + Object.isSealed(coche));

Object.seal(coche); //Descomentar y comprobar el error

delete coche.puertas; //No da error pero no elimina
console.log("2 --> " + coche.puertas);


console.log("3 --> " + Object.isSealed(coche));

coche.color="rojo"; //No se añade
console.log(coche);


//Object.defineProperty(coche, "velocidadMaxima", {value:200,enumerable:false}); //ERROR