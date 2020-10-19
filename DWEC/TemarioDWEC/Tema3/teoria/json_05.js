//json_05.js - Funciones reviver

/*EJEMPLO BÁSICO DE FUNCIÓN REVIVER: SE LLAMA A CADA VER POR CADA PAR CLAVE-VALOR DE LA
CADENA JSON. SE DEBE DEVOLVER UN VALOR PARA QUE NO SE ELIMINE DE LA CADENA JSON.
SE LLAMA UNA ÚLTIMA VEZ CON LA CADENA VACÍA. DEBE DEVOLVERSE EN ESTE CASO TAMBIÉN UN
VALOR PARA QUE NO DEVUELVA EL MÉTODO PARSE EL VALOR UNDEFINED */

var obj,text;

//EJEMPLO BÁSICO DE FUNCIÓN REVIVER
console.log("EJEMPLO1");
obj = JSON.parse('{"A":1,"B":2,"C":3,"D":4,"E":5}', function (key, value) {
	return value;
});
console.log(obj);



//EJEMPLO BÁSICO PARA ANALIZAR CADA EJECUCIÓN
console.log("\n\nEJEMPLO2");
obj = JSON.parse('{"A":1,"B":2,"C":3,"D":4,"E":5}', function (key, value) {
	console.log("Clave: " + key);
	console.log("Valor");
	console.log(value);
	return value;
});
console.log("Fuera de parse");
console.log(obj);


//EJEMPLO BÁSICO DEVOLVIENDO VALOR ÚNICAMENTE EN LA ÚLTIMA LLAMADA
console.log("\n\nEJEMPLO3");
obj = JSON.parse('{"A":1,"B":2,"C":3,"D":4,"E":5}', function (key, value) {
	if(key=="")
		return value;
});
console.log(obj);


//EJEMPLO BÁSICO DEVOLVIENDO VALOR PARA TODOS SALVO EN LA ÚLTIMA LLAMADA
console.log("\n\nEJEMPLO4");
obj = JSON.parse('{"A":1,"B":2,"C":3,"D":4,"E":5}', function (key, value) {
	if(key!="")
		return value;
});
console.log(obj);


/*NO DEVUELVE NADA LA FUNCIÓN REVIVER NI PARA VALORES NI PARA LA ÚLTIMA LLAMADA CON
CADENA VACÍA. DEVOLVERÁ UNDEFINED */
console.log("\n\nEJEMPLO5");
obj = JSON.parse('{"A":1,"B":2,"C":3,"D":4,"E":5}', function (key, value) {});
console.log(obj); //UNDEFINED


//PARES CLAVE VALOR Y CONTEXTO PARA CADA UNA DE LAS LLAMADAS A LA FUNCIÓN REVIER
console.log("\n\nEJEMPLO6");
text = '{"A":1,"B":2,"C":3,"D":{"D1":41,"D2":42},"E":5}';
obj = JSON.parse(text, function (key, value) {
	console.log(key + "-->" + value);
	console.log(this); //CONTEXTO --> OBJETO BAJO EL CUAL SE LLAMA
	return value;
});
console.log(obj);


//ESE PUEDE PROCESAR EL PARÁMETRO KEY Y HACER MODIFICACIONES
console.log("\n\nEJEMPLO7");
obj = JSON.parse('{"A":1,"B":2,"C":3,"D":4,"E":5}', function (key, value) {
	if(key!="B")
		return value;
	else
		return value*10;
});
//EL VALOR DE LA CLAVE B SE MULTIPLICA POR 10
console.log(obj);


//ES NECESARIO TENER CUIDADO CON LA LLAMADA FINAL AL MANIPULAR SU VALOR
console.log("\n\nEJEMPLO8");
var obj = JSON.parse('{"A":1,"B":2,"C":3,"D":4,"E":5}', function (key, value) {
	if(key=="B")
		return value;
	else
		return value * 10;
});
console.log(obj); //NaN --> MULTIPLICA EL OBJETO POR 10


//ES NECESARIO DEVOLVER UNA VALOR PARA LA LLAMADA FINAL CON CADENA VACÍA
console.log("\n\nEJEMPLO9");
var obj = JSON.parse('{"A":1,"B":2,"C":3,"D":4,"E":5}', function (key, value) {
	if(key=="B")
		return value;
});
console.log(obj); //UNDEFINED --> NO SE DEVUELVE VALOR PARA LA LLAMADA FINAL CON CADENA VACÍA


//EN ESTE CASO SE DEVUELVE EL VALOR SIN MODIFICAR DE LA LLAMADA FINAL CON CADENA VACÍA
//LO QUE NO SE DEVUELVE NO SE INCLUYE EN EL OBJETO
console.log("\n\nEJEMPLO10");
var obj = JSON.parse('{"A":1,"B":2,"C":3,"D":4,"E":5}', function (key, value) {
	if(key!="B")
		return value;
});
console.log(obj); //DEVUELVE TODO EL OBJETO INICIAL SALVO EL PAR CON CLAVA B


//SE PUEDE PROCESAR EL PARÁMETRO VALUE
console.log("\n\nEJEMPLO11");
var obj = JSON.parse('{"A":1,"B":2,"C":3,"D":4,"E":5}', function (key, value) {
	if(value==1)
		return value*1000;
	return value; //ES NECESARIO DEVOLVER UN VALOR
});
console.log(obj);


//TIPOS DE LOS DATOS --> 4 Y 5 COMO CADENAS
console.log("\n\nEJEMPLO12");
var obj = JSON.parse('{"A":1,"B":2,"C":3,"D":"4","E":"5"}', function (key, value) {
	console.log(key + ": " + typeof(value) + " - " + value);
	return value;
});
console.log(obj); //OBJETO INICIAL