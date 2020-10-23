//json_16.js --> Stringify, parámetro de reemplazo: funcion

var persona = {
	nombre:"luis",
	edad:40,
	direccion: {calle:"mirabel",numero:10},
	hijos:[{namehijo:"pablo",edad:15},{namehijo:"marta",edad:20}],
	telefonos:["987654321","679679679"],
	trabaja:true
};


//Ejemplo básico
console.log("Ejemplo 1");
var textoJSON = JSON.stringify(persona,function(key,value) {
	return value;
});
console.log(textoJSON);


//Ejemplo básico de función que no hace ni devuelve nada
console.log("Ejemplo 2");
var textoJSON = JSON.stringify(persona,function(key,value) {});
console.log(textoJSON);


//La primera vez se ejecuta con key="" y value igual al objeto
console.log("\n\nEjemplo 3");
textoJSON = JSON.stringify(persona,function(key,value) {
	console.log(key);
	console.log(value);
	return value;
});
console.log(textoJSON);


//Si se devuelve undefined la propiedad no se añade a la lista
console.log("\n\nEjemplo 4");
textoJSON = JSON.stringify(persona,function(key,value) {
	if(typeof value === "number")
		return undefined;
	return value;
});
console.log(textoJSON);


//Los objetos se procesan recursivamente. Se quitan las cadenas.
console.log("\n\nEjemplo 5");
textoJSON = JSON.stringify(persona,function(key,value) {
	console.log(value);
	if(typeof value === "string")
		return undefined;
	return value;
});
console.log(textoJSON);