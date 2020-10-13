//lenguaje_72.js - Ejercicio de expresiones regulares: A partir de una cadena CSV almacenar en un array de forma ordenada
// Orden --> Nombre, DNI, teléfono, código postal y matrícula

var cadenaCSV="Ana,34567881A,983123456,47030,8948RGH,38012,2145SDC,Luis,912323232,81233234H,87654321Q,23456,4532PLF,Marta,671223344,656778899,76543,Jose Luis,4567KJL,98765432W";

var arrayDatosInicial = [];
var arrayDatosFinal = [];
var datosPersona = [];

var nombreExpr = /^[A-Z]{1}[a-z]+|[A-Z]{1}[a-z]+\s[A-Z]{1}[a-z]+$/;
var dniExpr = /^\d{8}[a-zA-Z]$/;
var telefonoExpr = /^[679][0-9]{8}$/;
var cpExpr = /^\d{5}$/;
var matriculanExpr = /^[0-9]{4}[B-DF-HJ-NP-TV-Z]{3}$/;

arrayDatosInicial = cadenaCSV.split(",");

arrayDatosInicial.forEach(function (x,y) {

	indice=-1;
	nombreExpr.test(x) ? indice=0 : a=0;
	dniExpr.test(x) ? indice=1 : a=0;
	telefonoExpr.test(x) ? indice=2 : a=0;
	cpExpr.test(x) ? indice=3 : a=0;
	matriculanExpr.test(x) ? indice=4 : a=0;

	if(indice != -1)
		datosPersona[indice] = x;

	if((y+1)%5 == 0) {
		arrayDatosFinal.push(datosPersona);
		datosPersona = [];
	}
});

console.log(arrayDatosFinal);