//json_07.js - Fechas en los JSON

//EJEMPLO CON UNA FECHA ESCRITA CON FORMATO CORRECTO
var text = '{"name":"john","birthdate":"1992-07-20"}';
var objPerson = JSON.parse(text);
console.log("Right date");
console.log( objPerson.birthdate ); //String
objPerson.birthdate = new Date( objPerson.birthdate );
console.log( objPerson.birthdate ); //Date Object



//EJEMPLO CON UNA FECHA ESCRITA MAL
text = '{"name":"john","birthdate":"15-05-1992"}'; //El mes 15 no es válido
objPerson = JSON.parse(text);
console.log("\n\nWrong date");
console.log( objPerson.birthdate ); //String
objPerson.birthdate = new Date( objPerson.birthdate );
console.log( objPerson.birthdate ); //Date object



//EJEMPLO DE FECHA CONVERTIDA CON FUNCIÓN TRANSFORMADORA
var text = '{"name":"john","birthdate":"1992-07-20"}';
var objPerson = JSON.parse(text, function (key,value) {
	if(key=="birthdate") {
		return new Date(value);
	} else {
		return value;
	}
});
console.log("\n\n\n");
console.log( objPerson.birthdate ); //Date Object