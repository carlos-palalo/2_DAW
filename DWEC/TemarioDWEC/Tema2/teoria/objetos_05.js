//objetos_05.js - Eliminación de propiedades

function Casa(metros,habitaciones,localidad) {
    this.metros = metros;
    this.habitaciones = habitaciones;
    this.localidad = localidad;
}

var casa1 = new Casa(80,3,"Valladolid");
var casa2 = new Casa(70,2,"Madrid");

delete casa1.localidad; //SE ELIMINA

//CASA1
console.log("SE HA ELIMINADO LA PROPIEDAD LOCALIDAD DE casa1");
var propiedades = Object.keys(casa1);
console.log("Número de propiedades: " + propiedades.length);
propiedades.forEach(x => console.log(x + " --> " + casa1[x]));

//COMPROBAR SI UNA PROPIEDAD ESTÁ EN UN OBJETO: CASA1
console.log("COMPROBAR SI UNA PROPIEDAD ESTÁ EN UN OBJETO");
("metros" in casa1) ? console.log(true) : console.log(false);
("habitaciones" in casa1) ? console.log(true) : console.log(false);
("localidad" in casa1) ? console.log(true) : console.log(false);

//CASA2
console.log("\n\nNO SE HA ELIMINADO NADA DE casa2");
propiedades = Object.keys(casa2);
console.log("Número de propiedades: " + propiedades.length);
propiedades.forEach(x => console.log(casa2[x]));
("metros" in casa2) ? console.log(true) : console.log(false);
("habitaciones" in casa2) ? console.log(true) : console.log(false);
("localidad" in casa2) ? console.log(true) : console.log(false);




//Eliminar todas las propiedades de un objeto
console.log("\n\nELIMINAR TODAS LAS PROPIEDADES DE UN OBJETO");
propiedades = Object.keys(casa2);
console.log(propiedades);
console.log(casa2);

propiedades.forEach(x => delete casa2[x]);

propiedades = Object.keys(casa2);
console.log(propiedades);
console.log(casa2);