<?php
# asignemos un valor a la variable $A
$A = 0;
/* establezcamos la condición menor que cinco e insertemos dentro de la instrucción algo que modifique el valor de esa variable de modo que en algun momento deje de cumplirse la condición; de no ocurrir esto, el bucle se repetiría indefinidamente en este ejemplo el autoincremento ++ de la variable hará que vaya modificandose su valor*/
while ($A < 5) echo "El valor de A es: ", $A++, "<br>";
# comprobemos que este while solo ejecuta una instrucción
# la delimitada por el punto y coma anterior
print("Esto solo aparecerá una vez. While no lo incluye en su bucle");
