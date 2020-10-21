//Ordenar json a partir de fechas

var personas = '[\
    {"nombre":"pepe","fechanac":"1980-05-06"},\
    {"nombre":"julian","fechanac":"1982-05-02"},\
    {"nombre":"carlos","fechanac":"1986-02-03"},\
    {"nombre":"jose","fechanac":"1930-03-20"},\
    {"nombre":"ana","fechanac":"1955-03-21"},\
    {"nombre":"maria","fechanac":"1955-03-01"}\
]';

var obj = JSON.parse(personas, function (key, value) {
    if (key == "fechanac") {
        dia = new Date(value);
        return dia;
    }
    return value;
});

//ORDENACIÓN ASCENDENTE [1930-...]
for (var i = 0; i < obj.length; i++) {
    for (var j = 0; j < obj.length; j++) {
        if (obj[j].fechanac.getTime() > obj[i].fechanac.getTime()) {
            auxiliar = obj[i];
            obj[i] = obj[j];
            obj[j] = auxiliar;
        }
    }
}
console.log(obj);

console.log("Persona más jóven:");
console.log(obj[obj.length - 1]);

console.log("Persona más vieja:");
console.log(obj[0]);