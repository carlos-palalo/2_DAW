//objetos_17.js - assign


//Ejemplo1 --> Propiedad a propiedad de forma literal
console.log("EJEMPLO1 -- PROPIEDAD A PROPIEDAD DE FORMA LITERAL");
var persona1 = {};

persona1 = Object.assign(persona1,{nombre:"luis"});
console.log(persona1);

persona1 = Object.assign(persona1,{edad:30});
console.log(persona1);



//Ejemplo2 --> Varias propiedades a la vez (igual que lo anterior). Sobrescritura de propiedades
console.log("\n\nEJEMPLO2 -- VARIAS PROPIEDADES A LA VEZ");
var persona2 = {
    nombre:"ana",
    edad:40
};

var persona3 = {
    direccion:"calle mirabel",
    telefono:"98737483",
    edad:50 //Se sobrescribe
};

var persona4 = {};

persona4 = Object.assign(persona4,persona2);
console.log(persona4);

persona4 = Object.assign(persona4,persona3);
console.log(persona4);



//Ejemplo3 --> Especificando varios objetos
console.log("\n\nEJEMPLO3 -- ESPECIFICANDO VARIOS OBJETOS");
var persona5 = {
    nombre:"luis"
};

var persona6 = {
    edad:45
};

var persona7 = {
    telefono:"987654321"
};

var persona8 = Object.assign(persona5,persona6,persona7);
console.log(persona5);
console.log(persona6);
console.log(persona7);
console.log(persona8);



//Ejemplo4 --> Las propiedades pueden ser objetos. Se copia la referencia
console.log("\n\nEJEMPLO4 -- LAS PROPIEDADES PUEDEN SER OBJETOS");
var persona9 = {
    nombre:"luis",
    direccion:{
        calle:"mirabel",
        numero:10
    }
}

var persona10 = {};

persona10 = Object.assign(persona10,persona9);
console.log(persona10);

persona9.nombre = "ana";
console.log(persona9);
console.log(persona10);

persona9.direccion.numero = 15;
console.log(persona9);
console.log(persona10);



//Ejemplo5 --> No copia las propiedades no enumerables
console.log("\n\nEJEMPLO5 -- NO COPIA LAS PROPIEDADES NO ENUMERABLES");
var persona11 = {
    nombre:"ana"
};

var persona12 = {};

Object.defineProperty(persona11,"edad",{
    value:30,
    enumerable:true //Cambiar a false para que no copie la propiedad
});

persona12 = Object.assign(persona12,persona11);
console.log(persona12);