//lenguaje_29.js - Arrays: Básico</title>

//Definición a partir del objeto Array
var paises = new Array(); //vacío
var comunidades = new Array(17); //17 elementos
var provincias = new Array("Castellón","Valencia","Alicante"); //3 elementos

//Definición sin el objeto Array
var dias = []; //vacío
var festivos = ["Santos","Navidad","Constitución"]; //3 elementos

//Se accede al array por un índice
console.log(festivos[0]); //Leer
festivos[1]="Día de la comunidad"; //Escribir
console.log(festivos[1]);	
//Acceso completo al array
console.log(festivos);

//La propiedad length obtiene el número de elementos del array
console.log(paises.length);
console.log(comunidades.length);
console.log(provincias.length);
console.log(dias.length);
console.log(festivos.length);

//El primer elemento es el de índice 0
console.log(festivos[0]);

//El último elemento es el de length-1
console.log(festivos[festivos.length-1]);

//El acceso a una posición no asignada o no incluída nos dará undefined
console.log(comunidades[6]);
console.log(festivos[5]);