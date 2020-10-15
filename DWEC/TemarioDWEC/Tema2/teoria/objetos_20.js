//objetos_20.js - Iteradores: Iterador que recibe una lista

function iterador(lista) {
    var indice = 0;

    return {
        next: function() {
            if(indice<lista.length) {
                return {value:lista[indice++],done:false}
            } else {
                return {done:true}
            }
        }
    }
}

//var listaIterador = new iterador([1,2,3,4,5,6,7,8]);
var listaIterador = new iterador(['A','B','C','D','E']);

console.log("Fuera del bucle: " + listaIterador.next().value);
console.log("Fuera del bucle: " + listaIterador.next().value);
console.log("Fuera del bucle: " + listaIterador.next().value);

var i;
do {
    i = listaIterador.next();
    if(!i.done)
        console.log(i.value);
} while(!i.done)