<?php
# Definamos dos variables y lasignémosles valores.
# Hubieran podido obteners por cualquier otro procedimiento:
# desde un array,
# a través de un formulario cuya action ejecute este script, etc.
$A = 3;
$B = "3";
if ($A == $B)
    print("A es igual B");

# cualquier otra instrucción que incluyeramos de aqui
# en adelante se ejecutaría independientemente de que la condición
# se cumpla ó no ya que esta forma de if (sin llaves)
# unicamente considera la primera instrucción
# comprobémoslo en este otro supuesto
if ($A < $B)
    print("A es menor que B");
print("<br>A no es menor que b, pero esto saldrá<br>");
print("Esta es la segunda instrucción. No la condicionará el if");
