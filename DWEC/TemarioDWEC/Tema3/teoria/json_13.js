//json_13.js --> Propiedades no enumerables con stringify no son tenidas en cuenta

var persona = {
	nombre:"luis",
	edad:40,
	direccion: {street:"mirabel",numero:10},
	hijos:[{namehijo:"pablo"},{namehijo:"marta"}],
	trabajo:undefined,
	telefono:"98767654", //Se hará no enumerable
	firmar: function() {console.log("firma")}
};

Object.defineProperty(persona,"telefono",{
	enumerable:false //Cambiar a true y comprobar
});


//Las propiedades trabajo, telefono y firmar no se pasarán
var textoJSON = JSON.stringify(persona);

console.log(textoJSON);