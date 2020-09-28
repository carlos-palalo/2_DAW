/*PRIMERA FORMA*/
var texto = "ConcatenaciÓn, semáforo, xilófono";

texto = texto.normalize("NFD").replace(/[\u0300-\u036f]/g, "");

console.log(texto);

/*SEGUNDA FORMA*/
var texto2 = "ConcatenaciÓn, semáforo, xilófono";
texto2 = texto2.replace(/[á]/gi, 'a');
texto2 = texto2.replace(/[é]/gi, 'e');
texto2 = texto2.replace(/[í]/gi, 'i');
texto2 = texto2.replace(/[ó]/gi, 'o');
texto2 = texto2.replace(/[ú]/gi, 'u');
console.log(texto2);

/*TERCERA FORMA*/
var texto2 = "ConcatenaciÓn, semáforo, xilófono";
for (var i = 0; i < texto2.length; i++) {
    switch (texto2.charAt(i)) {
        case "á":
            texto2 = texto2.replace(/['á']/g, 'a');
            break;
        case "é":
            texto2 = texto2.replace('é', 'e');
            break;
        case "í":
            texto2 = texto2.replace('í', 'i');
            break;
        case "ó":
            texto2 = texto2.replace('ó', 'o');
            break;
        case "ú":
            texto2 = texto2.replace('ú', 'u');
            break;
    };
}
console.log(texto2);