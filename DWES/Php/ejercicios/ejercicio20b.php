<?php
$respuesta = $_REQUEST['res'];

if (0 < $respuesta && $respuesta < 10) {
    printf("Respuesta Correcta! :)");
} else {
    printf("Respuesta Incorrecta! :(");
}
