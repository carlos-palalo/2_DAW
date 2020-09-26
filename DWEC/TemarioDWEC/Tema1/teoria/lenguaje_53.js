//Lenguaje_53.js - Ejercicio: Simular 1000 boletos de lotería primitiva y calcular los acertantes de cada categoría

function random(min, max) {
    return Math.floor((Math.random() * (max - min + 1)) + min);
}


function ordenaArray(lista) {
    var temporal;

    for(i=0;i<6;i++) {
        for(j=0;j<6;j++) {
            if(lista[j] > lista[j+1]) {
                temporal = lista[j];
                lista[j] = lista[j+1];
                lista[j+1] = temporal;
            }
        }
    }

    return lista;
}


function comprobarBoleto(boleto,sorteo) {
    var aciertos = 0;

    for(i=0;i<6;i++) {
        if(boleto.indexOf(sorteo[i]) != -1) {
            aciertos++;
        }
    }

    return aciertos;
}


const NUM_BOLETOS = 1000;
var boletosTodos = Array(NUM_BOLETOS);
var boleto = Array(6);
var sorteo = Array(6);
var numeroValores = 0;

//CREAMOS 1000 BOLETOS Y EL SORTEO
for(z=0;z<=NUM_BOLETOS;z++) { //Cambiar z por i para explicar error
    while (numeroValores<6) {
        valor = random(1,49);
        if(boleto.indexOf(valor)==-1) {
            boleto.push(valor);
            numeroValores++;
        }
    }
    if(z<NUM_BOLETOS) {
        boletosTodos[z] = ordenaArray(boleto);
    } else {
        sorteo =ordenaArray(boleto);
    }
    
    numeroValores = 0;
    boleto = [];
}

//EN ESTE PUNTO TENEMOS LOS BOLETOS Y REALIZADO EL SORTEO
//console.log(boletosTodos);
//console.log(sorteo);


//COMPROBAR BOLETOS
var resultado = Array(7);
resultado.fill(0);

for(z=0;z<NUM_BOLETOS;z++) {
    resultado[comprobarBoleto(boletosTodos[z],sorteo)]++;
}

console.log(resultado);