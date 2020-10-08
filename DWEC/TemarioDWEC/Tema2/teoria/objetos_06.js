//objetos_06.js - Comparar objetos directamente

var coche = {
    marca : "opel"
}

var auto = {
    marca : "opel"
}

console.log("1-->" + (coche == auto));
console.log("2-->" + (coche === auto));

var automovil = coche;
console.log("3-->" + (coche == automovil));
console.log("4-->" + (coche === automovil));

automovil.marca = "seat";
console.log("5-->" + (coche == automovil));
console.log("6-->" + (coche === automovil));

console.log(coche.marca);