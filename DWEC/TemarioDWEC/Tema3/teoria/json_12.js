//json_12.js --> Ejercicio: ordenar un JSON por las fechas de nacimiento
var personasCadena = '[\
    {"nombre":"pepe","fechanac":"1980-04-06"},\
    {"nombre":"ana","fechanac":"1978-04-06"},\
    {"nombre":"juan","fechanac":"1983-05-06"},\
    {"nombre":"maria","fechanac":"1985-04-06"},\
    {"nombre":"alfonso","fechanac":"1983-04-06"},\
    {"nombre":"luis","fechanac":"1984-04-06"}]';

console.log(personasCadena);

//Se transforma el json a objeto y la fecha se devuelve en milisegundos desde el 1-1-1970
var objeto = JSON.parse(personasCadena,function (key,value) {
    var fecha;
    if(key=="fechanac") {
        fecha = new Date(value);
        return fecha.getTime();
    } else {
        return value;
    }
});

console.log(objeto);

var ordenado = objeto.sort(function(a,b) {
    if(a.fechanac < b.fechanac) return -1;
    if(a.fechanac > b.fechanac) return 1;
    return 0;
});

console.log(objeto);

for(x in objeto) {
    var fecha,anno,mes,dia,cadena="";
   
    Object.keys(objeto[x]).forEach(function(y){
        if(y == "fechanac") {
            fecha = new Date(objeto[x][y]);
            cadena += fecha.getFullYear() +"-";
            
            if(fecha.getMonth()<10)
                cadena += "0";
            cadena += fecha.getMonth() +"-";
            
            if(fecha.getDate()<10)
                cadena += "0";
            cadena += fecha.getDate();

            objeto[x][y] = cadena;
            cadena = "";
        }
    });
}

var textoFinal = JSON.stringify(objeto);

console.log(textoFinal);