//lenguaje_60.js - Ejercicio de cadenas: Codificar un texto

var cadena="Esto es un texto para hacer ejercicios con cadenas. Se realizará una transformación sobre el mismo. Se emplearán métodos del objeto String.";
var codificado="";
var decodificado="";
var caracternuevo = "";

console.log(cadena);
for(i=0;i<cadena.length;i++) {
	caracternuevo = cadena.charCodeAt(i) + 1;
	codificado += String.fromCharCode(caracternuevo);
}

console.log("\n"+codificado+"\n");

for(i=0; i<codificado.length;i++) {
	caracternuevo = codificado.charCodeAt(i) - 1;
	decodificado += String.fromCharCode(caracternuevo);
}
console.log(decodificado);