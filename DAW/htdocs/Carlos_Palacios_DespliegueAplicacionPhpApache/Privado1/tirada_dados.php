<?php
session_start();

if (isset($_SESSION['logueado'])) {
    echo '
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/privado1.css">
    <meta charset="utf-8" />
    <title>Practica Apache - DAW</title>
    <script type="text/javascript">
        function random(min, max) {
            return Math.floor((Math.random() * (max - min + 1)) + min);
        }
    </script>
</head>

<body>';

    echo "<h1>Tirada de dados</h1>";
    echo "<p>Escribe un script PHP que realice la simulación de lanzar 5 dados y muestre una imagen con los valores obtenidos en cada uno de los dados</p>";
    for ($i = 0; $i < 5; $i++) {
        switch (rand(1, 6)) {
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
    }
} else {
    header('Location: ../index.php');
}
