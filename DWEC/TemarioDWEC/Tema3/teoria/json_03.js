//json_03.js - Contenido de un JSON
/*
	JSON puede contener:
		-Cadenas
		-Números
		-Objetos
		-Arrays
		-Booleanos
		-Nulos
	JSON no puede contener:
		-undefined
		-Fechas (se tratarán como cadenas)
		-Funciones
*/

var persona = {
	nombre:"luis",
	edad:34,
	direccion: {calle:"mirabel",numero:15},
	padres:["paco","maria"],
	casado:true,
	trabajo:null,
	hijos:undefined,
	fechanac:new Date(),
	decirHola:function () {console.log("Hola");}
};

//Algunos valores no se pasan (undefined y funciones) y otros se pasan transformados (fechas)
console.log("SE IMPRIME EL OBJETO ENTERO");
console.log(persona);

console.log("\n\nSE IMPRIME LA CADENA JSON");
console.log(JSON.stringify(persona));