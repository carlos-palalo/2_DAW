//lenguaje_09.js - Relación entre hoisting y ámbito

function funcionEjemplo() {
	//Las variables no declaradas son globales
	variable1 = 5;
	var variable2 = 7;
}

			
funcionEjemplo();
			
console.log(variable1); //5
//console.log(variable2); //ReferenceError: variable2 is not defined

//funcionEjemplo();