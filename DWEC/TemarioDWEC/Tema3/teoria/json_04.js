//json_04.js - Crear un método que imprima todos los elementos de un JSON, incluidos los anidados

var myObject = {
	name:"john",
	age:34,
	address: {street:"Oslo West",number:16},
	parents:[{name:"peter",age:66,address:{streetp:"Oslo South",numberp:26}},{name:"mary",age:64,address:{streetm:"Oslo North",numberm:36}}],
	married:true,
	job:null
};

function accessObject(obj,route="") {
	if(JSON.stringify(obj)!='{}') { //¿Está vacío el objeto?
		for(x in obj) { //Si no está vacío lo recorro
			if(typeof(obj[x])==typeof({})) { //¿La propiedad es de tipo objeto?
				if(obj[x]!=null) //¿Es nulo el objeto?
					accessObject(obj[x],route + " -> " + x); //Si es un objeto llamamos al método de forma recursiva
			} else {
				console.log(route + " - " + x + " -----> " + obj[x]); //Si es un dato primitivo lo imprimo junto con su ruta
			}
		}
	} else {
		console.log(obj)
	}
}

accessObject(myObject);