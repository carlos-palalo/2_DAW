//Hacer un objeto y recorrerlo

var persona = new Object();
persona.nombre = "Carlos";
persona["apellidos"] = "Palacios";
var edad = "edad";
persona[edad] = "21";

console.log("Recorrido de un array");
Object.keys(persona).forEach(x => console.log(" -- " + persona[x]));