//objetos_19.js - Iteradores: creación manual de un objeto iterador

//Un objeto es un iterador cuando sabe cómo acceder a los elementos de una colección uno a uno mientras mantiene un registro de su posición actual en dicha secuencia.
//En JavaScript un iterador es un objeto que tiene un método next() el cual devuelve un objeto  con dos propiedades: done y value.
function iterador(inicio,fin) {
    var contador = inicio;

    return {
        next: function() {
            if(contador<=fin) {
                return {value:contador++,done:false}
            } else {
                return {done:true}
            }
        }
    }
}

console.log("EJEMPLO1 -- Iterar del 5 al 8");
var contA = iterador(5,8);
console.log(contA.next().value);
console.log(contA.next().value);
console.log(contA.next().value);
console.log(contA.next().value);
console.log(contA.next().value); //undefined
console.log(contA.next().value); //undefined




console.log("\n\nEJEMPLO2 -- Iterar del 1 al 4");
var contB = iterador(1,4);
var i;
do {
    i = contB.next();
    if(!i.done)
        console.log(i.value);
} while(!i.done)