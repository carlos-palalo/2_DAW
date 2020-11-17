<?php
include 'head.php';
session_start();

$diccionario = [
    "coche" => "car", "pescado" => "fish", "cama" => "bed", "mesa" => "table", "silla" => "chair",
    "cerveza" => "beer", "casa" => "house", "gato" => "cat", "perro" => "dog", "bailar" => "dance"
];

$_SESSION['diccionario'] = $diccionario;

echo '<img src="images/arrays.png" width="600" height="355" alt="imagen_bucles"/>';
include 'pie.php';
