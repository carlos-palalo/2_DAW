<?php
session_start();

if (isset($_SESSION['logueado'])) {
    echo '
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/privado2.css">
    <meta charset="utf-8" />
    <title>Practica Apache - DAW</title>
    <script type="text/javascript">
        function random(min, max) {
            return Math.floor((Math.random() * (max - min + 1)) + min);
        }
    </script>
</head>

<body>';
    $cont = 0;
    do {
        $num1 = rand(1, 6);
        $num2 = rand(1, 6);
        $suma = $num1 + $num2;
        $cont++;
    } while ($suma != 7);
    echo "<h1>Nº intentos para sumar 7</h1>";
    switch ($num1) {
        case 1:
            echo "<img src='../imagenes/uno.jpg'>";
            break;
        case 2:
            echo "<img src='../imagenes/dos.jpg'>";
            break;
        case 3:
            echo "<img src='../imagenes/tres.jpg'>";
            break;
        case 4:
            echo "<img src='../imagenes/cuatro.jpg'>";
            break;
        case 5:
            echo "<img src='../imagenes/cinco.jpg'>";
            break;
        case 6:
            echo "<img src='../imagenes/seis.jpg'>";
            break;
    }
    switch ($num2) {
        case 1:
            echo "<img src='../imagenes/uno.jpg'>";
            break;
        case 2:
            echo "<img src='../imagenes/dos.jpg'>";
            break;
        case 3:
            echo "<img src='../imagenes/tres.jpg'>";
            break;
        case 4:
            echo "<img src='../imagenes/cuatro.jpg'>";
            break;
        case 5:
            echo "<img src='../imagenes/cinco.jpg'>";
            break;
        case 6:
            echo "<img src='../imagenes/seis.jpg'>";
            break;
    }
    echo "<br>El número de veces que se ha intentado sumar 7 con los dados ha sido: " . $cont;
} else {
    header('Location: ../index.php');
}
