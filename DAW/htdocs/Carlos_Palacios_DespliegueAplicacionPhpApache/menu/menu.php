<?php
session_start();

if (isset($_SESSION['logueado'])) {
    echo '
    <!DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://fonts.googleapis.com/css2?family=Cherry+Swash:wght@700&display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="../css/menu.css">
            <meta charset="utf-8" />
            <title>Practica Apache - DAW</title>
        </head>
        <body>
            <header>Menu</header>
            <nav>
                <a class="verde" href="../Privado1/tirada_dados.php">TIRADA</a>
                <a class="rojo" href="../Privado2/sumar_7.php">SUMA 7</a>
                <a class="verde" href="../Privado3/par_impar.php">PAR/IMPAR</a>
                <a class="rojo" href="acercade.php">ACERCA DE</a>
            </nav>
        </body>
    </html>';
} else {
    header('Location: ../index.php');
}
