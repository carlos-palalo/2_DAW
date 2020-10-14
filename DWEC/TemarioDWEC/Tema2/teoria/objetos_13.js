//objetos_13.js - Objetos extensibles: isExtensible y preventExtensions
//Si no es extensible no se pueden añadir propiedades aunque sí eliminar y cambiar valores.

var persona = {
    nombre:"Ana",
    edad:30,
    dni:"45454545A"
}

console.log("1 --> " + Object.isExtensible(persona));
Object.defineProperty(persona, "direccion", {value:"calle"});
console.log("2 --> " + Object.getOwnPropertyNames(persona));

//Deja de ser extensible
Object.preventExtensions(persona);
console.log("3 --> " + Object.isExtensible(persona));

//No extensible no permite añadir propiedades
//Object.defineProperty(persona, "telefono", {value:"987654321"}); //ERROR
persona.telefono = "45645656"; //No da error pero no se añade como propiedad

persona.nombre = "Ana María"; //No extensible permite modificar valores
delete persona.edad; //No extensible permite eliminar propiedates
console.log("4--> " + Object.getOwnPropertyNames(persona));
console.log("5 --> " + persona.nombre);
console.log("6 --> " + persona.edad);


/*
Un objeto puede ser no extensible con:
    Object.preventExtension();
    Object.seal();
    Object.freeze();
*/

