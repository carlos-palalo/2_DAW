<?php

include 'head.php';

$nombres = ['Ana', 'Juan', 'Luis', 'Rosa', 'Mateo', 'Sara'];
//$nombres=array(); si le quiero vacio

echo "<pre>";
var_dump($nombres);
//print_r($nombres);
echo "</pre>";

$nombres[] = "Carlos";
echo "<pre>";
var_dump($nombres);
echo "</pre>";

echo "Total Alumnos: " . count($nombres) . "<br><br>";

foreach ($nombres as $value) {
    echo $value . "<br>";
}

$notas = ['Ana' => 4, 'Juan' => 2.5, 'Luis' => 2, 'Rosa' => 4, 'Mateo' => 3, 'Sara' => 8];

echo "<pre>";
var_dump($notas);
echo "</pre>";

foreach ($notas as $clave => $value) {
    echo $clave . ": " . $value . "<br>";
}

$cont = 0;
$acumulador_notas = 0;
foreach ($notas as $value) {
    if ($value >= 5) {
        $cont++;
    }
    $acumulador_notas += $value;
}
$media = $acumulador_notas / count($notas);
echo "<br>Total Aprobados: " . $cont . "<br>";
echo "Media notas: " . $media;

include 'pie.php';
