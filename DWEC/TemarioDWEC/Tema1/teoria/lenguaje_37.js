//lenguaje_37.js - Arrays multidimensionales

var tablaA = [ [1,2,3] , [4,5,6] , [7,8,9,10] , ['A','B','C'] ];
console.log(tablaA.length);
console.log(tablaA[0].length);
tablaA[1][1] = 20;
console.log(tablaA[1][1]);

console.log("Recorrer la tabla con dos bucles for");
for(let i=0;i<tablaA.length;i++) {
	for(let j=0;j<tablaA[j].length;j++) {
		console.log(tablaA[i][j]);
	}
}
			
console.log("Recorer la tabla con el método forEach")
tablaA.forEach(function (elementoExterno,indiceExterno){
	tablaA[indiceExterno].forEach(function (elementoInterno,indiceInterno) {
		console.log(tablaA[indiceExterno][indiceInterno]);
	});
});

//Crear un array bidimensional a partir de uno unidimensional
var tablaB = new Array(5);
tablaB.fill(['A','B','C']);
console.log(tablaB);

//Bidimensional a partir de dos unidimensionales
var tablaC = Array.of([1,2,3],[3,4,5]); 
console.log(tablaC);


//var tablaD = new Array(new Array(3),new Array(3));
var tablaD = Array(Array(3),Array(3));
console.log(tablaD); //Bidimensional pero vacío