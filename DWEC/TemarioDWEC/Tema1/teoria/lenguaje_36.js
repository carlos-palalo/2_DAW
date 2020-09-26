//lenguaje_36.js - Creación de arrays con Array.from y Array.of

//FROM
var lista1 = Array.from("casa");
console.log(lista1);

var lista2 = Array.from([1,2,3,4],function (x) {
	return x*10;
});
console.log(lista2);

//OF
var lista3 = Array.of(7);
console.log(lista3);
var lista4 = Array.of("casa");
console.log(lista4);