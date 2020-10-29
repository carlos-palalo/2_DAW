/***********************************/
/****** 1º EXAMEN EJERCICIO 2 ******/
/* CARLOS PALACIOS ALONSO - 2º DAW */
/***********************************/

var solicitudes = '{"solicitudes": [\
        { "codigo": 0, "nombre": "Luis    ", "fechanac": "4-7-2005", "notaExpediente": "7.5", "admitido": "", "causaExclusion": "" }, \
        { "codigo": 1, "nombre": "Marta   ", "fechanac": "3-8-2003", "notaExpediente": "15.52", "admitido": "", "causaExclusion": "" }, \
        { "codigo": 2, "nombre": "Ana     ", "fechanac": "1-7-1998", "notaExpediente": "8.60", "admitido": "", "causaExclusion": "" }, \
        { "codigo": 3, "nombre": "Maria   ", "fechanac": "2000-9-3", "notaExpediente": "7.92", "admitido": "", "causaExclusion": "" }, \
        { "codigo": 4, "nombre": "Juan    ", "fechanac": "6-2-2003", "notaExpediente": "8.12", "admitido": "", "causaExclusion": "" }, \
        { "codigo": 5, "nombre": "Jorge   ", "fechanac": "9-1-2000", "notaExpediente": "9.14", "admitido": "", "causaExclusion": "" }, \
        { "codigo": 6, "nombre": "Antonio ", "fechanac": "6-3-2004", "notaExpediente": "6.34", "admitido": "", "causaExclusion": "" }, \
        { "codigo": 7, "nombre": "Susana  ", "fechanac": "9-7-2001", "notaExpediente": "7.74", "admitido": "", "causaExclusion": "" }, \
        { "codigo": 8, "nombre": "Fernando", "fechanac": "2-2-2002", "notaExpediente": "5.78", "admitido": "", "causaExclusion": "" }, \
        { "codigo": 9, "nombre": "Alvaro  ", "fechanac": "3-1-2001", "notaExpediente": "7.58", "admitido": "", "causaExclusion": "" }, \
        { "codigo": 10, "nombre": "Manuel  ", "fechanac": "9-1-2003", "notaExpediente": "9.16", "admitido": "", "causaExclusion": "" }, \
        { "codigo": 11, "nombre": "Jaime   ", "fechanac": "6-3-2005", "notaExpediente": "6.34", "admitido": "", "causaExclusion": "" }, \
        { "codigo": 12, "nombre": "Monica  ", "fechanac": "9-7-2004", "notaExpediente": "7.74", "admitido": "", "causaExclusion": "" }, \
        { "codigo": 13, "nombre": "Lucia   ", "fechanac": "2-2-2003", "notaExpediente": "5.78", "admitido": "", "causaExclusion": "" }, \
        { "codigo": 14, "nombre": "Federico", "fechanac": "4-1-2004", "notaExpediente": "7.58", "admitido": "", "causaExclusion": "" }\
    ]}';

var objSolicitudes = JSON.parse(solicitudes);

var admitidos = new Array();

var expFecha = /^\d{1,2}-\d{1,2}-\d{4}/;
var expFechaNac = /^\d{1,2}-\d{1,2}-[2][0][0][0-5]/;
var expNotaFormato = /^[0-9]{1,2}.[0-9]{2}/;
var expNota = /^([0-9]|([1][0])).[0-9]{2}/;

objSolicitudes.solicitudes.forEach(x => {
    x.admitido = true;
    if (expFecha.test(x.fechanac)) {
        if (!expFechaNac.test(x.fechanac)) {
            x.admitido = false;
            x.causaExclusion += "- EDAD NO PERMITIDA -";
        } else {
            if (!expNotaFormato.test(x.notaExpediente)) {
                x.admitido = false;
                x.causaExclusion += "- NOTA CON FORMATO ERRÓENEO -";
            } else {
                if (!expNota.test(x.notaExpediente)) {
                    x.admitido = false;
                    x.causaExclusion += "- NOTA FUERA DE RANGO -"
                } else {
                    admitidos.push(x.notaExpediente);
                    admitidos.sort((a, b) => b - a);
                }
            }
        }
    } else {
        x.admitido = false;
        x.causaExclusion += "- FORMATO FECHA ERRÓNEO -"
    }
});



objSolicitudes.solicitudes.forEach(y => {
    let validar = false;
    for (let i = 0; i < 3; i++) {
        if (parseFloat(y.notaExpediente) == admitidos[i] && y.admitido == true) {
            validar = true;
        }
    }
    if (validar) {
        y.causaExclusion = "- NINGUNA -";
    } else if (y.admitido == true) {
        y.admitido = false;
        y.causaExclusion = "- EN LISTA DE ESPERA -";
    }
})

console.table(objSolicitudes.solicitudes);