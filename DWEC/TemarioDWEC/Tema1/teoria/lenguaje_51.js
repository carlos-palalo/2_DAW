//Lenguaje_52.js - Funciones flecha => (Autoinvocación)

//Autoinvocación, es decir, sin asignar a una variable

//Ejemplo1
( () => {console.log("Ejemplo básico de autoinvocación");})() //Sin parámetros


//Ejemplo2
( (x,y) => {console.log("\nSuma: " + parseInt(x+y));} ) (6,8); //Con parámetros


//Ejemplo3
var lista = [1,2,3,4,5];
var listaCuadrado = lista.map(x => x*x); //Como parámetro de un método
console.log("Array elevado al cuadrado: " + listaCuadrado);