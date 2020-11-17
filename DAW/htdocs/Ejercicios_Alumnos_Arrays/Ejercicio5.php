<?php
session_start();

include 'head.php';

$diccionario = [
    "coche" => "car", "pescado" => "fish", "cama" => "bed", "mesa" => "table", "silla" => "chair",
    "cerveza" => "beer", "casa" => "house", "gato" => "cat", "perro" => "dog", "bailar" => "dance"
];

$ingles = "";

if (isset($_REQUEST['traducir'])) {
    $palabra = htmlspecialchars($_REQUEST['palabra']);
    $encontrado = false;
    foreach ($diccionario as $clave => $value) {
        if ($clave == $palabra) {
            $encontrado = true;
            $ingles = $value;
        }
    }

    if (!$encontrado) {
        $ingles = "NO se ha encontrado la palabra";
    }
}

echo '
    <form action="" method="POST">
        <p>Palabra a traducir:<input type="text" name="palabra"></p>
        <p><input type="submit" value="Traducir" name="traducir"/>
        <input type="reset" value="Borrar"></p>
        <p>La traducción al inglés es: <input type="text" name="palabra_ingles" value="' . $ingles . '" size="30"></p>
    </form>';

include 'pie.php';
