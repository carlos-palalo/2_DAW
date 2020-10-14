//objetos_15.js - Objetos congelados: isFrozen y freeze

var coche = {
    color:"rojo",
    puertas: 4
}

console.log("1 --> " + Object.isFrozen(coche));
console.log("2 --> " + coche.puertas);
Object.freeze(coche); //Descomentar y comprobar
coche.puertas = 2;
console.log("3--> " + coche.puertas); //Impide modificar valores congelado
console.log("4 --> " + Object.isFrozen(coche));
console.log("5 --> " + Object.isSealed(coche)); //si se congela se sella

delete coche.color; //No permite eliminar
console.log("6 --> " + Object.getOwnPropertyNames(coche));

//Object.defineProperty(coche, "velocidadMaxima", {value:200,enumerable:false});//ERROR