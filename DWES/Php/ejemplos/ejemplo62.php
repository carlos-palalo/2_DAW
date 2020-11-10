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
    "d" => "rojo",
);
sort($a);
echo "<h3>Ordenación por valores usando sort</h3>";
foreach ($a as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
sort($c);
echo "<h3>Ordenación por valores usando sort</h3>";
foreach ($c as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
rsort($a);
echo "<h3>Ordenación inversa por valores usando rsort</h3>";
foreach ($a as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
ksort($b);
echo "<h3>Ordenación por claves usando ksort</h3>";
foreach ($b as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
krsort($b);
echo "<h3>Ordenación inversa por claves usando krsort</h3>";
foreach ($b as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
asort($c);
echo "<h3>Ordenación por valores manteniendo indices asort</h3>";
foreach ($c as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
arsort($c);
echo "<h3>Ordenación inversa por valores manteniendo indices arsort</h3>";
foreach ($c as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<h3>Ordenación por valores mediante
función definida por usuario manteniendo indices</h3>";
/* esta funcion recoge el valor de la variable $a
y aplicar el operador de comparación ternario
de forma que si el valor de la variable es impar
devuelve como valor -2 y si es par devuelve 2
el 2 y el menos 2 unicamente establecen criterios de
comparacion de modo que los valores -2 serán considerados
anteriores a los valores +2 */
function micomparar($a)
{
    return ($a % 2 != 0) ? -2 : 2;
}
uasort($a, "micomparar");
foreach ($a as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<h3>Ordenación por clave mediante función de usuario </h3>";
uksort($a, "micomparar");
foreach ($a as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
echo "<h3>Ordenación por valores mediante función de usuario </h3>";
usort($a, "micomparar");
foreach ($a as $clave => $valor) {
    echo "Clave: ", $clave, " Valor: ", $valor, "<br>";
}
