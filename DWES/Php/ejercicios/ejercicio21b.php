<?php
$res1 = $_REQUEST['res'];
$res2 = $_REQUEST['res2'];

printf("Caballo? " . $res1);
if ($res1 == "Blanco") {
    printf("<br>-- Respueta Correcta! :)<br>");
} else {
    printf("<br>-- Respuesta Incorrecta! :(<br>");
}
printf("Número entre 1 y 10, " . $res2 . "?");
if (0 < $res2 && $res2 < 10) {
    printf("<br>-- Respuesta Correcta! :)");
} else {
    printf("<br>-- Respuesta Incorrecta! :(");
}
