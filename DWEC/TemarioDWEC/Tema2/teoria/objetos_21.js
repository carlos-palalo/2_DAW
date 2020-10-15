//objetos_21.js - Generadores: Básico

//Ejemplo1
function* generador1() {
    contador = 1;
    while(true)
        yield contador++;
}

console.log("EJEMPLO1 -- CUENTA HASTA 3");
var gen = generador1();
console.log(gen.next().value);
console.log(gen.next().value);
console.log(gen.next().value);


//Ejemplo2
function* generador2(inicio,fin) {
    contador = inicio;
    while(contador<=fin){
        yield contador++;
    }
}

console.log("\n\nEJEMPLO2 -- CUENTA DEL 5 AL 27");
var gen = generador2(5,27);
console.log(gen.next().value);
console.log(gen.next().value);
console.log(gen.next().value);
console.log(gen.next().value);
console.log(gen.next().value);
console.log(gen.next().value);
console.log(gen.next().value);
console.log(gen.next().value);
console.log(gen.next().value);
console.log(gen.next().value);
console.log(gen.next().value);
console.log(gen.next().value);


var i;
do {
    i = gen.next();
    if(!i.done)
        console.log(i.value);
} while(!i.done)
