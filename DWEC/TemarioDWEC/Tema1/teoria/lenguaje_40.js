//lenguaje_40.js - Funciones: Paso por valor y por referencia

//VALORES PRIMITIVOS --> POR VALOR
function funcionParametros(a,b) {
	a=5;
	b++;
	console.log("Dentro de la función X(a) = " + a);
	console.log("Dentro de la función Y(b) = " + b);
}

var x=1,y=2;
console.log("VALORES PRIMITIVOS");
console.log("Antes");
console.log("X = " + x);
console.log("Y = " + y);
funcionParametros(x,y);
console.log("Después");
console.log("X = " + x);
console.log("Y = " + y);



//OBJETOS --> POR REFERENCIA
function cambiarColor(objHabitacion) {
	objHabitacion.colorPared = "rojo";
}

var hab1 = {
	superficie: 10,
	tipo: "dormitorio",
	colorPared: "blanco" };
			
console.log("OBJETOS");
console.log("Antes --> colorPared = " + hab1.colorPared);
cambiarColor(hab1);
console.log("Después --> colorPared = " + hab1.colorPared);



//ARRAYS --> POR REFERENCIA
function cambiarNumeroEnArray(lista,indice,nuevoValor) {
	lista[indice] = nuevoValor;
}

var listaNumeros = [1,2,3,4,5];
		
console.log("ARRAYS");
console.log("Antes");
console.log("Antes --> lista = " + listaNumeros);
cambiarNumeroEnArray(listaNumeros,2,100)
console.log("Después --> lista = " + listaNumeros);