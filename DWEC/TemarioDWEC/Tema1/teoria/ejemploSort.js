//eliminar primero, ultimo y todos
var letras =['1','4','12','22','10'];
console.log("Array");
console.log(letras);

letras.sort()
console.log("Array ordenado");
console.log(letras);

letras.splice(0,1);
console.log("Primer elemento eliminado");
console.log(letras);

letras.splice(-1,1);
console.log("Último elemento eliminado")
console.log(letras);

letras.splice(0,letras.length);
console.log("Todos los elementos eliminados");
console.log(letras);