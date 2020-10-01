//Escribir un parrafo, meterlo en una variable
//decir cuantas palabras hay de 1,2,3,4 y 5+ letras
//sacarlas de forma independiente
var texto = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu leo eu diam malesuada aliquet. Duis vehicula feugiat nulla, ac ultrices nunc finibus viverra. Aliquam dictum sollicitudin gravida. Proin placerat at est in consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper elit orci, at ullamcorper neque accumsan sed. Aenean faucibus nulla quis sapien fermentum pulvinar. Ut vulputate quis velit vel blandit. Aliquam sit amet laoreet augue. Nulla id diam nisl. Praesent congue quis tortor et commodo. Suspendisse eget dui laoreet urna feugiat finibus. Fusce sodales pellentesque est et porttitor. Cras non tortor eget dui aliquet ultrices.";
texto= texto.replace(/(;|,|\.|\(|\(|\¡|\!|\¿|\?)/g,"");
texto =texto.replace(/\s/g," ");
var arrayAuxiliar = texto.split(" ");
var regexUno = /^[\w]$/;
var regexDos = /^\w{2}$/;
var regexTres = /^\w{3}$/;
var regexCuatro = /^\w{4}$/;
var regexCincoMas = /^\w{5,}$/;
var arrayUno = Array();
var arrayDos = Array();
var arrayTres = Array();
var arrayCuatro = Array();
var arrayCincoMas = Array();

for (var i = 0; i < arrayAuxiliar.length; i++) {
    if (regexUno.test(arrayAuxiliar[i])) {
        arrayUno.push(arrayAuxiliar[i]);
    }
    if (regexDos.test(arrayAuxiliar[i])) {

        arrayDos.push(arrayAuxiliar[i]);
    }
    if (regexTres.test(arrayAuxiliar[i])) {
        arrayTres.push(arrayAuxiliar[i]);
    }
    if (regexCuatro.test(arrayAuxiliar[i])) {
        arrayCuatro.push(arrayAuxiliar[i]);
    }
    if (regexCincoMas.test(arrayAuxiliar[i])) {
        arrayCincoMas.push(arrayAuxiliar[i]);
    }
}

console.log("Hay " + arrayUno.length + " palabras de 1 letra.")
console.log(arrayUno);

console.log("Hay " + arrayDos.length + " palabras de 2 letra.")
console.log(arrayDos);

console.log("Hay " + arrayTres.length + " palabras de 3 letra.")
console.log(arrayTres);

console.log("Hay " + arrayCuatro.length + " palabras de 4 letra.")
console.log(arrayCuatro);

console.log("Hay " + arrayCincoMas.length + " palabras de 5 o más letra.")
console.log(arrayCincoMas);
