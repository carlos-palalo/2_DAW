var datos = "jesus,53453452E,677123456,1234RTS,34567,56789,983123456,67899876U,paco,3456PHN";
//Hacer una matriz ordenada donde este el nombre, dni, cp, tlf y matricula
//;
arrayDatos = datos.split(",");
var tabla = Array(arrayDatos.length / 5);
var dni = /^\d{8}[A-Z]$/;  //DNI
var matriModerna = /^[0-9]{4}[^AEIOUQY]{3}$/;
var codPostal = /^[0-9]{4,5}$/; //CODIGO POSTAL
var tlf = /^[679][0-9]{8}$/;    //TLF
var nombre = /^[a-z-A-Z\D]+$/;

for (var i = 0; i <= arrayDatos.length / 5; i++) {
    tabla[i] = Array(5);
    for (var j = 0; j < 5; j++) {
        if(nombre.test(arrayDatos[j])){
            tabla[i][0]=arrayDatos[j];
        }
        if(dni.test(arrayDatos[j])){
            tabla[i][1]=arrayDatos[j];
        }
        if(codPostal.test(arrayDatos[j])){
            tabla[i][2]=arrayDatos[j];
        }
        if(tlf.test(arrayDatos[j])){
            tabla[i][3]=arrayDatos[j];
        }
        if(matriModerna.test(arrayDatos[j])){
            tabla[i][4]=arrayDatos[j];
        }
    }
    arrayDatos = arrayDatos.slice((i + 1) * 5,);
}
console.log("Tabla [Nombre, DNI, CP, Tlf, Matricula]:");
console.log(tabla);