<?php
# asignemos valores a cuatro variables
$a = 3;
$b = 6;
$c = 9;
$d = 17;

# utilicemos operadores de comparación
# y recojamos sus resultados en nuevas variables
$x = $a < $b;
$y = $a < $b;
$z = $c > $b;

# apliquemos un operador lógico (por ejemplo &&)
# e imprimamos el resultado
print("Resultado FALSO si no sale nada: " . ($y && $z) . "<br>");

# hagamos la misma comparación sin utilizar la variables $y y $z
# que deberá darnos el mismo resultado
print("<br>Resultado FALSO si no sale nada: " . ($a < $b && $c > $b) . "<br>");

/* veamos ahora que ocurre al ampliar la estructura
¿qué ocurriría si escribíeramos $a<$b OR $c>$b && $d<$a? El operador && tiene preferencia ante OR, luego haria primero la comparación $c>$b && $d<$a 9 > 6 es cierto, 17 < 3 es falso, luego como && solo devuelve cierto cuando ambos sean ciertos el resultado de esa opción es FALSO.
Veamos que ocurre al comparar $a<$b OR falso (resultado anterior) como 3 < 6 es cierto OR operará con cierto y falso que dará como resultado CIERTO, ya que basta que se cumpla una de las condiciones */
/* vamos a comprobarlo mediante este operador condicional no conocemos aun su sintaxis pero adelántemosla un poco... si el el contenido del paréntesis que va detrás del if es cierto imprimirá cierto y en caso contrario imprimirá falso. Aqui debería imprimirnos cierto */
if ($a < $b or $c > $b && $d < $a) {
    print "cierto<br>";
} else {
    print "falso<br>";
}

# Cambiemos la estructura anterior por $a<$b || $c>$b AND $d<$a
# ahora se operará primero || que como antes dará cierto
# pero ese resultado operado mediante AND con falso dará FALSO
# AL CAMBIAR LOS OPERADORES POR SUS SIMILARES el resultado el DISTINTO
if ($a < $b || $c > $b and $d < $a) {
    print "cierto<br>";
} else {
    print "falso<br>";
}

# un paréntesis nos devolverá a la situación anterior
# escribamos $a<$b || ($c>$b AND $d<$a)
# veremos que el resultado es CIERTO como ocurría en el primer caso
if ($a < $b || ($c > $b and $d < $a)) {
    print "cierto<br>";
} else {
    print "falso<br>";
}
?>