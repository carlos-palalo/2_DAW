//Hacer un código que acabe con: 
//var resultado = calcular(8,3);
//console.log(resultado);
//calcular me permita hacer suma, resta, multiplicación y división
/*var op = "+";

function calcular(num1, num2) { //mejor switch
    if (op == "+") {
        return num1 + num2
    }
    if (op == "-") {
        return num1 - num2;
    }
    if (op == "*") {
        return num1 * num2;
    }
    if (op == "/") {
        return num1 / num2;
    }
}*/

var op = "+";
var calcular;

switch (op) {
    case "+":
        calcular=function(a,b){return a+b};
        break;
    case "-":
        calcular=function(a,b){return a-b};
        break;
    case "*":
        calcular=function(a,b){return a*b};
        break;
    case "/":
        calcular=function(a,b){return a/b};
        break;
}

var resultado = calcular(8, 3);
console.log(resultado);