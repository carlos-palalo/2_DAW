//lenguaje_31.js - Arrays: Recorrer un array

function verValor(elemento,indice) {
	console.log("Elemento[" + indice + "] = " + elemento);
}

var festivos = ["Santos","Navidad","Constitución"]; //3 elementos


console.log("BUCLE FOR")
for(i=0;i<=festivos.length-1;i++) {
	console.log(festivos[i]);
}

console.log("MÉTODO FOREACH (función nominal)")
festivos.forEach(verValor);

console.log("MÉTODO FOREACH (función anónima)")
festivos.forEach(function (elemento,indice){
	console.log("Elemento[" + indice + "] = " + elemento);
});