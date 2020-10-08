//objetos_09.js - Propiedades enumerables y no enumerables (defineProperty y defineProperties)

var coche = {
    marca:"opel",
    color:"azul",
    estado:"marcha",

    arrancar: function() {
        this.estado = "marcha";
    },

    parar: function() {
        this.estado = "parado";
    }
}


//Añadir una propiedad
//defineProperty
Object.defineProperty(coche, "modelo", {value:"corsa"});
//coche.modelo = "corsa";

Object.defineProperty(coche, "velocidadMaxima", {
    value:200,
    enumerable:false
});

//Añadir varias propiedades
//defineProperties
Object.defineProperties(coche, {
    "tipoCombustible" : {
        value:"gasoleo",
        enumerable:true
    },
    "capacidadDeposito" : {
        value:60,
        enumerable:false
    },
});


//Con propertyIsEnumerable determinamos si una propiedad es enumerable
console.log("1 --> " + coche.propertyIsEnumerable("tipoCombustible"));
console.log("2 --> " + coche.propertyIsEnumerable("velocidadMaxima"));


//Mostrar las propiedades
var propiedades;
propiedades = Object.keys(coche); //Enumerables
console.log("ENUMERABLES con Object.keys\n" + propiedades);

propiedades = Object.getOwnPropertyNames(coche); //Enumerables o no enumerables
console.log("TODAS con getOwnPropertyNames\n" + propiedades);

console.log("TODAS con for .. in");
for(let x in coche) {
    console.log(x);
}


//¿Qué pasa a través de la cadena de prototipos?
//Las propiedades de los objetos nativos de Javascript están definidas como no enumerables, por lo que cuando utilizamos bucles for in sobre estos objetos no se obtiene estas propiedades, aunque estén presentes dentro de la cadena de prototipos y sean propiedades heredadas
/*console.log(vehiculo.estado);
console.log(vehiculo.propertyIsEnumerable("estado"));

console.log(coche.estado);
console.log(coche.propertyIsEnumerable("estado"));*/