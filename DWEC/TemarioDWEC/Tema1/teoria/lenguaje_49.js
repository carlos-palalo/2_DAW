//lenguaje_49.js - Funciones anidadas

//OBJETO FUNCIÓN
function calcular(numero,cantidad,accion) {

	function incrementar(valor) {
		return numero+valor;
	}

	function decrementar(valor) {
		return numero-valor;
	}

	if(accion=='+')	resultado = incrementar(cantidad);
	if(accion=='-')	resultado = decrementar(cantidad);

	return resultado;
}

console.log(calcular(35,6,'+'));
console.log(calcular(47,9,'-'));
//decrementar(6); //Error ya que la interna sólo puede ser llamada desde dentro de la externa



//OTRO EJEMPLO
function externa(pExterno) {
	var x=5;
	function interna(pInterno) {
		var y=7;
		console.log("Desde la interna: " + x + " - " + y);
		console.log(pInterno);
		console.log(pExterno);
	}
	interna(56);
	console.log("Desde la externa: " + x); //y no es accesible
	console.log(y);
	console.log(pExterno);
}

externa(23);