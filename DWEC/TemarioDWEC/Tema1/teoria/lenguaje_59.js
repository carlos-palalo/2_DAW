//lenguaje_59.js - Ejercicio de cadenas: Escribir un texto sin tildes

//SOLUCIÓN 1
var texto = "Esto es un texto para hacer ejercicios con cadenas. Se realizará una transformación sobre el mismo. Se emplearán métodos del objeto String.";
var tFinal = "";

for(i=0;i<texto.length;i++)	{
	switch(texto.charAt(i))	{
		case 'á':
			tFinal += texto.charAt(i).replace("á","a");
			break;
		case 'é':
			tFinal += texto.charAt(i).replace("é","e");
			break;
		case 'í':
			tFinal += texto.charAt(i).replace("í","i");
			break;
		case 'ó':
			tFinal += texto.charAt(i).replace("ó","o");
			break;
		case 'ú':
			tFinal += texto.charAt(i).replace("ú","u");
			break;
		default:
			tFinal += texto.charAt(i);
			break;
	}
}

console.log("Solución 1");
console.log(texto);
console.log("*************");
console.log(tFinal);




//SOLUCIÓN 2		

var texto_acento="Los hermanos Pinzón, Martín Alonso, Vicente Yáñez y Francisco Martín, marinos españoles, eran los tres miembros de la familia Pinzón, naturales de Palos de la Frontera (Huelva), de finales del siglo XV y comienzos del XVI, que participaron activamente en el primer viaje de Cristóbal Colón, que tuvo como resultado el descubrimiento de América, y en otros viajes de descubrimiento y exploración.";
var array_texto = texto_acento.split();
var tildes = ["á","Á","é","É","í","Í","ó","Ó","ú","Ú"];
var sin_tilde = ["a","A","e","E","i","I","o","O","u","U"];
var frase_sin_tilde="";

for(i=0;i<array_texto.length;i++) {
	var palabra="";
	for(j=0;j<array_texto[i].length;j++) {
		var str_concatenar = "";
		var indice_tilde = tildes.indexOf(array_texto[i][j]);
		if(indice_tilde != -1) {
			str_concatenar = array_texto[i][j].replace(tildes[indice_tilde],sin_tilde[indice_tilde]);
		} else {
			str_concatenar = array_texto[i][j];
		}
		palabra += str_concatenar;
	}
	frase_sin_tilde += palabra + " ";
}

console.log("\n\n\nSolución 2");
console.log(texto_acento);
console.log("*************");
console.log(frase_sin_tilde);