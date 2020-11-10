<?php
$clase = array(
    0 => array(
        "nombre" => "Carlos",
        "biologia" => 6,
        "fisica" => 8,
        "latin" => 2
    ),
    1 => array(
        "nombre" => "Ana",
        "biologia" => 6,
        "fisica" => 5,
        "latin" => 2
    ),
    2 => array(
        "nombre" => "Jose",
        "biologia" => 6,
        "fisica" => 5,
        "latin" => 2
    ),
    3 => array(
        "nombre" => "María",
        "biologia" => 2,
        "fisica" => 8,
        "latin" => 2
    ),
    4 => array(
        "nombre" => "Pedro",
        "biologia" => 4,
        "fisica" => 8,
        "latin" => 2
    ),
);

foreach ($clase as $key1 => $value1) {
    foreach ($value1 as $key2 => $value2) {
        switch ($key2) {
            case "nombre":
                echo "Nombre: ".$value2;
                break;
            case "biologia":
                echo " -- Biología: ".$value2;
                break;
            case "fisica":
                echo " -- Física: ".$value2;
                break;
            case "latin":
                echo " -- Latín: ".$value2;
                break;
        }
        echo "<br>";
    }
}
