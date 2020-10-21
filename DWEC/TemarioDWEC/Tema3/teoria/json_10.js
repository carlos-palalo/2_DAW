//json_10.js --> Ejercicio: pasar a mayúsculas un JSON

var text = '{"name":"John Johnson","street":"Oslo West 16","phone":"555 1234567"}';

var objeto = JSON.parse(text,function(key,value){
	if(typeof value === "string")
		return value.toUpperCase();
	return value;
});

var textoFinal = JSON.stringify(objeto);

console.log(textoFinal);