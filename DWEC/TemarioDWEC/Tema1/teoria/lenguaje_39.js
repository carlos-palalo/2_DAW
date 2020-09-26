//lenguaje_39.js - Funciones: Parámetros por defecto y parámetros rest

//PARÁMETROS POR DEFECTO
function funcion1(x,y,z=1) {
	console.log(x);
	console.log(y);
	console.log(z);
	console.log("========");
}

console.log("PARÁMETROS POR DEFECTO");
funcion1(4,5,6);
funcion1(4,5);
funcion1(4);



//PARÁMETROS REST
console.log("REST");
function funcion2(x,y,z,...argumentos) {
	console.log(argumentos);
	console.log("========");
}
funcion2(1,2,3,4,5,6,7,8);
funcion2(1,2);


function funcion3(...argumentos) {
	console.log(typeof argumentos);
	console.log("Número de parámetros: " + argumentos.length);
}
funcion3(1,2,3,4);
funcion3();
funcion3(1,2);


//Ejercicio: Simular la concatenación inversa con parámetros rest
//Función con un único parámetro rest para pasar varias cadenas a una única cadena
function funcion4(...ncompleto) {
	var c = "";
	for(let i=ncompleto.length-1;i>=0;i--) {
		c += ncompleto[i] + " ";
	}
	return c;
}
console.log(funcion4("Jesus","Perez","Gonzalez"));