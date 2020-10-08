//objetos_10.js - GETTER y SETTER. Accessor properties

//Ejemplo1 --> Ejemplo básico
var persona = {
    peso : 70,
    get pesar() { return this.peso;},
    set variar(x) { this.peso += x;}
}

console.log("1 --> " + persona.peso);
console.log("2 --> " + persona.pesar); //GETTER

persona.variar = 8; //SETTER

console.log("3 --> " + persona.pesar);
console.log("4 --> " + persona.peso);



//Ejemplo2 --> El getter y el setter pueden tener el mismo nombre
var botella = {
    cantidad : 1000,
    get beber() { return this.cantidad; },
    set beber(x) { this.cantidad -= x; }
}

console.log("5 --> " + botella.beber); //GETTER
botella.beber = 30; //SETTER
console.log("6 --> " + botella.beber); //GETTER


//Ejemplo3 --> Definir getter y setter con defineProperty
var cartera  = {
    dinero:200
}

Object.defineProperty(cartera, "acceder", {
    get : function() { return this.dinero; },
    set : function(x) { this.dinero += x; }
});

cartera.acceder = 75; //SETTER
console.log(cartera.acceder); //GETTER
cartera.acceder = -12; //SETTER
console.log(cartera.acceder); //GETTER


//Ejemplo4 --> Definir getter y setter con defineProperties (NO PROPERTY)
var monedero  = {
    dinero:200
}

Object.defineProperties(monedero,{
    "consultar" : { get : function() { return this.dinero; }},
    "modificar" : { set : function(x) { this.dinero += x; }}
});

monedero.modificar = 4;
console.log(monedero.consultar);

//consultar y modificar tienen enumerable=false
//Se pueden usar aunque no aparezcan directamente al imprimir el objeto
console.log(monedero);