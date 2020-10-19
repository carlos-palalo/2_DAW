//Cambiar el año de una fecha (++ o --) dependiendo si un dia es par o impar

var personas = '[\
    {"nombre":"pepe","fechanac":"1980-04-06"}\
]';
var dia = new Date();

var obj = JSON.parse(personas, function (key, value) {
    if (key == "fechanac") {
        fecha = new Date(value);
        dia = fecha.getDate();
        console.log(dia);
        if (dia % 2 == 0) {
            fecha.getFullYear()++;
        } else {
            fecha.getFullYear()--;
        }
        
        return fecha;
    }
    return value;
});

console.log(obj);