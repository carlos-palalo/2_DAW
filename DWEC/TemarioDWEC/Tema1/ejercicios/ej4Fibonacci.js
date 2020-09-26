//Meter en un array los 100 primeros números de la secuencia Fibonacci 0 -> 100 números -> [0,1,1,2...]
var fibo = [];
for (var i = 0; i < 50; i++) {
    if (i < 2) {
        fibo[i] = i;
    } else {
        fibo[i] = fibo[i - 1] + fibo[i - 2];
    }
}
console.log("Fibonacci: [" + fibo + "]");

//Hacer un procedimiento que calcule el n-ésimo número de Fibonacci
function calcularFib(num) {
    if (num == 0) {
        return 0;
    }
    else if (num == 1) {
        return 1
    } else {
        return calcularFib(num - 1) + calcularFib(num - 2);
    }

}
console.log("El valor de Fibonacci en la posición 4 es: " + calcularFib(100));