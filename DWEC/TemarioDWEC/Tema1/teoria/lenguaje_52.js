//Lenguaje_53.js - Ejercicio: Calcular los 100 primeros números de la secuencia de Fibonacci


function fibonacci(n) {
    if(n>2) {
        return fibonacci(n-1) + fibonacci(n-2);
    } else if (n==2) {
        return 1;
    } else {
        return n;
    }
}

const CANTIDAD = 50;
var secuencia = Array(CANTIDAD);
secuencia.fill(0);

for(i=0;i<CANTIDAD;i++) {
    console.log(i); //Así vemos el tiempo de cálculo
    secuencia[i] = fibonacci(i);
}

console.log(secuencia);