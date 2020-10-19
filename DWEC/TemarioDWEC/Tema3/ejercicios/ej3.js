//Cambiar el año de una fecha (++ o --) dependiendo si un dia es par o impar

var personas = '[\
    {"nombre":"pepe","fechanac":"1980-05-06"},\
    {"nombre":"julian","fechanac":"1982-05-02"},\
    {"nombre":"carlos","fechanac":"1986-02-03"},\
    {"nombre":"jose","fechanac":"1930-03-20"},\
    {"nombre":"ana","fechanac":"1995-05-21"},\
    {"nombre":"maria","fechanac":"1957-04-01"}\
]';
var dia = new Date();

var obj = JSON.parse(personas, function (key, value) {
    if (key == "fechanac") {
        dia = new Date(value);
        if (dia.getDate() % 2 == 0)
            dia.setFullYear(dia.getFullYear() + 1);
        else
            dia.setFullYear(dia.getFullYear() - 1);
        return dia;
    }
    return value;
});

console.log(obj);