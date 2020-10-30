<?php
/* definamos algunas variables de cadena tal como se describe en sus contenidos e incluyamos caracteres especiales \n */
$cadena1 = "Este texto está escrito
    en varias líneas
    y hemos saltado de una a otra
    pulsando enter";

$cadena2 = "Aquí\nseparamos\nlas\nlíneas\ncon\nsin\npulsar\nenter";

$cadena3 = <<<Prueba
    Nuevamente texto en varias lineas
    ahora usando sintaxis de documento incrustado.
    Seguiremos probando
Prueba;

$cadena4 = <<<OtraPrueba
    Ahora\ninsertaré\nalgo\ncomo\nesto
OtraPrueba;

# definamos una variable conteniendo saltos de linea HTML
# y vayamos construyendo una variable de salida
# en la que uniremos las variables anteriores insertando
# entre ellas saltos de linea para facilitar la visualización
# en el navegador
$saltador = "<br><br><br>";
$salida = $cadena1 . $saltador;
$salida .= $cadena2 . $saltador;
$salida .= $cadena3 . $saltador;
$salida .= $cadena4 . $saltador;

# visualicemos el resultado
print $salida;

#apliquemos ahora a la variable salida
# la funcion nl2br y veamos el resultado
print $saltador . nl2br($salida);
