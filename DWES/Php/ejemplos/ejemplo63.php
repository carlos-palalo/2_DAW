<?php
$a = array(1, 2, 3, 1, 1, 2, 3, 3, 4, 4, 4, 0, 1);
$b = array("blanco", "azul", "blanco", "blanco", "azul", "Blanco", "Azul");
$c = array(
    "b" => "verde",
    "c" => "rojo",
    "e" => "verde",
    "f" => "Rojo",
    "g" => "Verde",
    "a" => "rojo",
    "d" => "rojo"
);
$C = array(
    "b" => "verde",
    "c" => "rojo",
    "e" => "verde",
    "f" => "Rojo",
    "g" => "Verde",
    "a" => "rojo",
    "d" => "rojo"
);
echo "<h3>Crea una matriz de números enteros</h3>";
$r = range(7, 11);
foreach ($r as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<h3>Intercambia aleatoriamente elementos en una matriz</h3>";
srand(time());
shuffle($r);
foreach ($r as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<h3>Intercambia valores e indices</h3>";
$p = array_flip($a);
foreach ($p as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<br>";
$q = array_flip($c);
foreach ($q as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<h3>Inserta elementos al principio de una matriz</h3>";
array_unshift($a, 97, "Pepe", 128);
foreach ($a as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<br>";
array_unshift($c, 97, "Pepe", 128);
foreach ($c as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<h3>Inserta elementos al final de una matriz</h3>";
array_push($a, 3.4, "Luis", 69);
foreach ($a as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<br>";
array_push($c, 3.4, "Luis", 69);
foreach ($c as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<h3>Inserta elementos iguales
al principio o al final de una matriz</h3>";
$wz1 = array_pad($a, 25, "relleno");
foreach ($wz1 as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<br>";
$wz2 = array_pad($c, -17, "relleno");
foreach ($wz2 as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<h3>Fusiona dos matrices</h3>";
$wz3 = array_merge($a, $b);
foreach ($wz3 as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<h3>Extrae el primer elemento de una matriz</h3>";
array_shift($a);
foreach ($a as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<br>";
array_shift($c);
foreach ($c as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<h3>Extrae el ultimo elemento de una matriz</h3>";
array_pop($a);
foreach ($a as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<br>";
array_pop($c);
foreach ($c as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<h3>Extrae elementos de una matriz</h3>";
foreach ($a as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<br>";
$zz1 = array_slice($a, 3);
foreach ($zz1 as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<br>";
$zz2 = array_slice($a, -3);
foreach ($zz2 as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<br>";
$zz3 = array_slice($a, 3, 4);
foreach ($zz3 as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<br>";
$zz4 = array_slice($a, 3, -2);
foreach ($zz4 as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<br>";
$zz5 = array_slice($a, -5, -2);
foreach ($zz5 as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<h3>Invierte los elementos de la matriz</h3>";
foreach ($C as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<br>";
$inv = array_reverse($C);
foreach ($inv as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
