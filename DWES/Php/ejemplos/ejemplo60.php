<?php
$a = array(1, 2, 3, 1, 1, 2, 3, 3, 4, 4, 4, 0, 1);
$b = array("blanco", "azul", "blanco", "blanco", "azul", "Blanco", "Azul");
$c = array(
    "a" => "rojo",
    "b" => "verde",
    "c" => "rojo",
    "d" => "rojo",
    "e" => "verde",
    "f" => "Rojo",
    "g" => "Verde"
);
echo "<h3>Cuenta valores del array()</h3>";
$contador = array_count_values($a);
foreach ($contador as $valor => $veces) {
    echo "El valor ", $valor, " se repite ",
        $veces,
        " en la matriz a<br>";
}
echo $contador[0], "<br>";
echo $contador[1], "<br>";
echo $contador[2], "<br>";
echo $contador[3], "<br>";
echo $contador[4], "<br>";
$contador1 = array_count_values($b);
foreach ($contador1 as $valor => $veces) {
    echo "El valor ", $valor, " se repite ",
        $veces,
        " en la matriz a<br>";
}
echo $contador1["blanco"], "<br>";
echo $contador1["azul"], "<br>";
echo $contador1["Azul"], "<br>";
echo $contador1["Blanco"], "<br>";
$contador2 = array_count_values($c);
foreach ($contador2 as $valor => $veces) {
    echo "El valor ", $valor, " se repite ", $veces, " en la matriz a<br>";
}
echo $contador2["rojo"], "<br>";
echo $contador2["Verde"], "<br>";
echo $contador2["verde"], "<br>";
echo $contador2["Rojo"], "<br>";
echo "&lt;h3>Devuelve las claves de un array&lt;/h3>";
$claves = array_keys($a);
foreach ($claves as $v) {
    echo "El valor ", $v, " es una de las claves&lt;br>";
}
$claves1 = array_keys($a, 1);
foreach ($claves1 as $v) {
    echo "El valor ", $v, " es una de las claves de elementos
de la matriz cuyo valor es <b>1</b><br>";
}
echo "<h3>Devuelve los valores de un array</h3>";
$valores = array_values($c);
foreach ($valores as $v) {
    echo $v, " Este es un de los valores de
de la matriz c<br>";
}
