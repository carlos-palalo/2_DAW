//lenguaje_43.js - Funciones: Argumentos

function funcionParametros(a,b,c,d) {
	console.log("Hay " + arguments.length + " argumentos");
				
	for(i=0;i<=arguments.length-1;i++) {
		console.log(arguments[i]);
	}

	/*console.log(arguments[0]);
	console.log(arguments[1]);
	console.log(arguments[2]);
	console.log(arguments[3]);
	console.log(arguments[4]);
	console.log(arguments[5]);*/
}

funcionParametros(1,2,3,4);
funcionParametros(1,2);
funcionParametros(1,2,3,4,5,6); //Se podría acceder al 5 y al 6