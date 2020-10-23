//json_15.js --> Parámetro de reemplazo con stringify: array

var persona = {
	nombre:"luis",
	edad:40,
	direccion: {calle:"mirabel",numero:10},
	hijos:true,
	telefonos:["987654321","679679679"]
};

//Se especifican los nombres de las propiedades a añadir
var textoJSON = JSON.stringify(persona,["nombre","direccion","calle","hijos","telefonos"]);

console.log(textoJSON);