//objetos_16.js - getOwnPropertyDescriptor y getOwnPropertyDescriptors

//getOwnPropertyDescriptor

//Ejemplo1 --> Valores por defecto del descriptor
console.log("EJEMPLO1 -- VALORES POR DEFECTO DEL DESCRIPTOR");
var descriptor;

var coche = {
    puertas: 4
}

descriptor = Object.getOwnPropertyDescriptor(coche,"puertas");
console.log(descriptor);



//Ejemplo2 --> Valores establecidos del descriptor
console.log("\n\nEJEMPLO2 -- VALORES ESTABLECIDOS DEL DESCRIPTOR");
var persona = {
    peso : 70
}

Object.defineProperty(persona,"peso",{
    writable:true,
    enumerable:false,
    configurable:false
});

descriptor = Object.getOwnPropertyDescriptor(persona,"peso");
console.log(descriptor);



//Ejemplo3 --> Valores del descriptor con getter y setter
console.log("\n\nEJEMPLO3 -- VALORES DEL DESCRIPTOR CON GETTER Y SETTER");
var monedero  = {
    dinero:200
}

Object.defineProperty(monedero,"dinero",{
    enumerable:true,
    enumerable:false, //OJO: es la misma que la líne anterior
    get : function() { return this.dinero; },
    set : function(x) { this.dinero += x; }
});
//monedero.dinero = 300;
descriptor = Object.getOwnPropertyDescriptor(monedero,"dinero");
console.log(descriptor);



//getOwnPropertyDescriptors
//Ejemplo4 --> Se definen varias propiedades
console.log("\n\nEJEMPLO4 -- SE DEFINEN VARIAS PROPIEDADES");
var persona = {
    nombre: "luis",
    edad: 30,
    peso : 70
}

Object.defineProperties(persona,{
    "edad" : {
        writable:true,
        enumerable:false,
        configurable:true
    },
    "peso" : {
        writable:false,
        enumerable:true,
        configurable:false
    }
});

descriptor = Object.getOwnPropertyDescriptors(persona);
console.log(descriptor);