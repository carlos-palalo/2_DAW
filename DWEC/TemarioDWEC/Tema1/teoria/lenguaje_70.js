//lenguaje_70.js - Ejercicio de expresiones regulares: Libro en página 100, ejercicio 15
//Defina una expresión regular que permita validar el número de matrícula del alumno, el cual presenta la siguientes peculiaridades. El número de matrícula está compuesto por 5 dígitos y una letra. El grupo de cinco dígitos comienza siempre por un número impar y la letra puede ser tanto P como S, para diferenciar el nivel de estudios.
//Ej 14456S, 33334P, 56229S

var matrAlumExpr = /^(1|3|5|7|9)\d{4}[P|p|S|s]$/;
var matrAlum = "22345P";

matrAlumExpr.test(matrAlum) ? console.log("BIEN") : console.log("MAL");