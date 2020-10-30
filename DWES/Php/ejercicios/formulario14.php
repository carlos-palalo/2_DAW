<?php
$num = $_REQUEST['num'];

$array[] = "divisón exacta";
$array[] = "uno";
$array[] = "dos";
$array[] = "tres";
$array[] = "cuatro";
$array[] = "cinco";
$array[] = "seis";
$array[] = "siete";
$array[] = "ocho";
$array[] = "nueve";
$array[] = "diez";
$array[] = "once";

for ($i = 0; $i < 12; $i++) {
    if (($num % 12) == $i) {
        echo "El resto de la división es: ", $array[$i];
    }
}
?>