var jsonPreguntas = '{\
    "preguntas": [\
        { "codigo": 0, "enunciado": "La capital de España es...", "respuesta1": "Madrid", "respuesta2": "Barcelona", "respuesta3": "Sevilla", "correcta": "1" },\
        { "codigo": 1, "enunciado": "La suma de dos y dos son...", "respuesta1": "3", "respuesta2": "4", "respuesta3": "5", "correcta": "2" },\
        { "codigo": 2, "enunciado": "El rio Pisuerga pasa por...", "respuesta1": "Murcia", "respuesta2": "Almería", "respuesta3": "Valladolid", "correcta": "3" },\
        { "codigo": 4, "enunciado": "El número de módulos en segundo de DAW es...", "respuesta1": "4", "respuesta2": "5", "respuesta3": "6", "correcta": "2" },\
        { "codigo": 3, "enunciado": "El día de Navidad es el 25 de...", "respuesta1": "Enero", "respuesta2": "Noviembre", "respuesta3": "Diciembre", "correcta": "3" }\
    ]}';

var jsonRespuestas = '{\
    "examenes": [\
        {\
            "nombre": "marcos", "respuestas": [\
                { "codigo": "2", "respuesta": "3" },\
                { "codigo": "0", "respuesta": "1" },\
                { "codigo": "1", "respuesta": "2" },\
                { "codigo": "3", "respuesta": "3" },\
                { "codigo": "4", "respuesta": "1" }\
            ],\
            "puntuacion": "0"\
        },\
        {\
            "nombre": "ana", "respuestas": [\
                { "codigo": "0", "respuesta": "2" },\
                { "codigo": "1", "respuesta": "1" },\
                { "codigo": "2", "respuesta": "2" },\
                { "codigo": "3", "respuesta": "3" },\
                { "codigo": "4", "respuesta": "1" }\
            ],\
            "puntuacion": "0"\
        }\
    ]}';

var objPreguntas = JSON.parse(jsonPreguntas, function (key, value) {
    return value;
});

var objRespuestas = JSON.parse(jsonRespuestas, function (key, value) {
    return value;
});

var media = 0;
var numAprobados = 0
var numSuspensos = 0;

objRespuestas.examenes.forEach(x => {
    x.respuestas.forEach(y => {
        objPreguntas.preguntas.forEach(a => {
            a.codigo == y.codigo && a.correcta == y.respuesta ? x.puntuacion++ : x.puntuacion = x.puntuacion
        })
    });
    media = x.puntuacion / x.respuestas.length * 10;
    media < 5 ? numSuspensos++ : numAprobados++
});

console.log("Num Aprobados: " + numAprobados);
console.log("Num Suspensos: " + numSuspensos);
console.log(objRespuestas);