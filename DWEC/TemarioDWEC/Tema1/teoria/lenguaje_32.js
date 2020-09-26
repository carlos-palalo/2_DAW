//lenguaje_32.js - Arrays: Métodos

var festivos = ["Santos","Navidad","Constitución"]; //3 elementos

console.log("ARRAY INICIAL");
console.log(festivos);

//isArray() --> Devuelve true si es un array
console.log("ISARRAY");
if(Array.isArray(festivos)){console.log("Es un array");}


//toString() --> Convierte el array en cadena
console.log("TOSTRING");
var cadena = festivos.toString();
console.log(cadena);


//pop() --> Elimina el último elemento y lo devuelve
console.log("POP");
console.log(festivos.pop() + " - Nº de elementos: " + festivos.length);


//push() --> Añade un elemento al final del array y devuelve el nuevo número de elementos
console.log("PUSH");
festivos.push("Reyes");
console.log(festivos + " - Nº de elementos: " + festivos.length);


//reverse() --> Invierte un array
console.log("REVERSE");
festivos.reverse();
console.log(festivos);


//sort() --> Ordena un array
console.log("SORT");
festivos.sort();
console.log(festivos);


//splice() --> Añade o elimina elementos de un array
console.log("SPLICE");
var letras = ['A','B','C','D','E','F','G','H','I','J','K'];
letras.splice(2,1); //Elimina la C
console.log(letras);
letras = ['A','B','C','D','E','F','G','H','I','J','K'];
letras.splice(4,3); //Elimina E,F,G
console.log(letras);
letras = ['A','B','C','D','E','F','G','H','I','J','K'];
letras.splice(-3,1); //Elimina I
console.log(letras);
var letras = ['A','B','C','D','E','F','G','H','I','J','K'];
letras.splice(3,0,'casa'); //Añade 'casa' después de la C
console.log(letras);
var letras = ['A','B','C','D','E','F','G','H','I','J','K'];
letras.splice(5,0,'estudiante','escuela'); //Añade 2 palabras después de la E
console.log(letras);
var letras = ['A','B','C','D','E','F','G','H','I','J','K'];
letras.splice(1,3,'Z','Y'); //Añade 2 palabras en la posición y elimina 3 elementos
console.log(letras);


//splice --> Quitar el primer elemento
var letras = ['A','B','C','D','E','F','G','H','I','J','K'];
letras.splice(0,1); 
console.log(letras);


//splice --> Quitar el último elemento
var letras = ['A','B','C','D','E','F','G','H','I','J','K'];
letras.splice(-1,1); 
console.log(letras);


//splice --> Quitar el último elemento
var letras = ['A','B','C','D','E','F','G','H','I','J','K'];
letras.splice(0,letras.length); 
console.log(letras);


//indexOf() --> Devuelve la primera posición de un elemento dentro del array
console.log("INDEXOF");
var letras = ['A','B','C','D','E','A','B','C','D','E','A'];
console.log(letras.indexOf('E'));


//lastIndexOf() --> Devuelve la última posición de un elemento dentro del array
console.log("LASTINDEXOF");
var letras = ['A','B','C','D','E','A','B','C','D','E','A'];
console.log(letras.lastIndexOf('A'));


//concat() --> Concatena arrays
console.log("CONCAT");
var array1 = [1,2,3];
var array2 = ["a","b","c"];
var array3 = array1.concat(array2);
console.log(array3);
console.log(typeof(array3[0]));
console.log(typeof(array3[3]));
console.log("Tamaño:" + array3.length);


//copyWithin() --> Copia elementos del array dentro del array
console.log("COPYWITHIN");
var array1 = [0,1,2,3,4,5,6,7,8,9,10];
console.log(array1.copyWithin(2,6,8));
//Primer índice: Lugar en el que pega
//Segundo índice: Lugar a partir del que copia
//Tercer índice: Lugar en el que acaba la copia


//every() --> Comprueba si todos los elementos del array pasan un test
console.log("EVERY");
var notas = [6,7,3,6,9,6];
function aprobado(valor) {
	return valor >= 5;
}
console.log(notas.every(aprobado));

notas = [6,7,5,6,9,6];
console.log(notas.every(function (valor){
	return valor >= 5;
}));


//fill() --> Rellena el array con el mismo valor
console.log("FILL");
var valores = [6,4,8,3,9,6];
console.log(valores.fill(5));
var valores = [6,4,8,3,9,6];
console.log(valores.fill(5,2));
var valores = [6,4,8,3,9,6];
console.log(valores.fill(5,2,4));
//Primer valor: El elemento que se introduce
//Segundo valor: Índice del array a partir del que se introduce
//Tercer valor: Índice del array hasta el que se introduce


//filter() --> Crea un nuevo array con los elementos del array que pasan un test
console.log("FILTER");
var notas = [6,4,8,3,9,6];
function aprobado(valor) {
	return valor >= 5;
}
var notasbuenas1 = notas.filter(aprobado);
console.log(notasbuenas1);
var notasbuenas2 = notas.filter(function (valor){
	return valor >= 5;
});
console.log(notasbuenas2);


//find() --> Devuelve el primer elemento del array que pasa un test
console.log("FIND");
var notas = [3,4,2,3,9,6];
function aprobado(valor) {
	return valor >= 5;
}
console.log(notas.find(aprobado));
console.log(notas.find(function (valor){
	return valor >= 5;
}));


//findIndex() --> Devuelve el índice del primer elemento del array que pasa un test
console.log("FINDINDEX");
var notas = [3,4,2,3,9,6];
function aprobado(valor) {
	return valor >= 5;
}
console.log(notas.findIndex(aprobado));


//join() --> Junta los elementos de un array formando una cadena devolviendo una cadena y separando los elementos por ,
console.log("JOIN");
var palabras = ["hola","que","tal"];
var cadena = palabras.join();
console.log(cadena);
var palabras = ["hola","que","tal"];
var cadena = palabras.join("");
console.log(cadena);


//map() --> Crea un array con el resultado de aplicar una función a cada uno de los elementos de array
console.log("MAP");
var numeros = [3,4,8,3,9,6];
function cuadrado(valor) {
	return valor*valor;
}
console.log(numeros);
var nuevo = numeros.map(cuadrado);
console.log(nuevo);
console.log(numeros.map(function (valor){
	//Aprobar con 4
	if(valor==4)
		return 5;
	else
		return valor;
	}));


//reduce() --> Simplifica el array a un valor único (de izquierda a derecha)
console.log("REDUCE");
var numeros = [3,4,8,3,9,6];
function suma(total,valor) {
	return total+valor;
}
console.log(numeros.reduce(suma,6)); //6 es el acumulador inicial
//console.log(numeros)
console.log(numeros.reduce(function (total,valor){
	return total+valor;
}));			


//reduceRight() --> Simplifica el array a un valor único (de derecha a izquierda)
console.log("REDUCERIGHT");
var numeros = [3,4,8,3,9,6];
function suma(total,valor) {
	return total+valor;
}
//Para este ejemplo el resultado será igual a reduce
console.log(numeros.reduceRight(suma));


//shift() --> Elimina el primer elemento de un array y lo devuelve
console.log("SHIFT");
var numeros = [3,4,8,3,9,6];
console.log("Array inicial: " + numeros);
console.log("shift(): " + numeros.shift());
console.log("Array final: " + numeros);


//slice() --> Selecciona partes de un nuevo array y lo devuelve
console.log("SLICE");
var letras = ["A","B","C","D","E","F","G","H","I","J"];
console.log("Array inicial: " + letras);
console.log("slice(3,7): " + letras.slice(3,7));
//Selecciona desde índice 3 hasta índice 7-1
var letras = ["A","B","C","D","E","F","G","H","I","J"];
console.log("Array inicial: " + letras);
console.log("slice(-8,-2): " + letras.slice(-8,-2));
//Selecciona desde índice 3 hasta índice 7-1
var letras = ["A","B","C","D","E","F","G","H","I","J"];
console.log("Array inicial: " + letras);
console.log("slice(3): " + letras.slice(3));


//some() --> Comprueba si alguno de los elementos del array pasan un test
console.log("SOME");
var notas = [6,5,3,6,9,6];
function algunsuspenso(valor) {
	return valor < 5;
}
console.log(notas.some(algunsuspenso));
console.log(notas.some(function (valor) {
	return valor < 5;
}));


//unshift() --> Añade un elemento al principio de un array y devuelve el nuevo tamaño
console.log("UNSHIFT");
var numeros = [3,4,8,3,9,6];
console.log("Array inicial: " + numeros);
console.log("unshift(1): " + numeros.unshift(1));
console.log("Array final: " + numeros);


//valueOf() --> Devuelve el array
console.log("VALUEOF");
var numeros = [3,4,8,3,9,6];
console.log("Array: " + numeros.valueOf());
console.log("Array: " + numeros);