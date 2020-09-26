//Lenguaje_53.js - Ejercicio: Invocar un único método llamado calcular para realizar las 4 operaciones aritméticas básica (+,-,*,/)

var operacion="+";
var calcular;

switch(operacion) {
    case '+':
        calcular = function (a,b) {return a+b;}
        break;
    case '-':
        calcular = function (a,b) {return a-b;}
            break;
    case '*':
        calcular = function (a,b) {return a*b;}
        break;
    case '/':
        calcular = function (a,b) {return a/b;}
        break;
}


var resultado = calcular(8,3);
console.log(resultado);