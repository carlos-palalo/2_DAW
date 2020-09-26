//Simular la concatenación con parámetros rest
//Función con un único parámetro rest para pasar varias cadenas
function funcion5(...ncompleto2){
    var c = "";
    for(let i=0; i<ncompleto2.length; i++){
        c +=ncompleto2[i] + " ";
    }
    return c;
};
console.log(funcion5("A","B","C"));

function funcion6(...ncompleto3){
    var c = "";
    for(let i=ncompleto3.length-1; i>=0; i--){
        c +=ncompleto3[i] + " ";
    }
    return c;
};
console.log(funcion6("A","B","C"));