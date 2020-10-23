//json_16.js --> Stringify, parámetro space

var persona = {
	nombre:"luis",
	edad:40,
	direccion: {calle:"mirabel",numero:10},
	hijos:[{namehijo:"pablo",edad:15},{namehijo:"marta",edad:20}],
	telefonos:["987654321","679679679"],
	trabaja:true
};


var textoJSON1 = JSON.stringify(persona);
console.log(textoJSON1);

var textoJSON2 = JSON.stringify(persona,null,3);
console.log(textoJSON2);