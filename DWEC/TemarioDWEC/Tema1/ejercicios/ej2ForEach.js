//recorrer una tabla con un foreach

tablaA = [ [1,2,3],[4,5,6],[7,8,9,10],['A','B','C'] ];
console.log("Array:");
console.log(tablaA);

tablaA.forEach(function (elementoExterno,indiceExterno){tablaA[indiceExterno].forEach(function(elementoInterno,indiceInterno){console.log(tablaA[indiceExterno][indiceInterno])})});

