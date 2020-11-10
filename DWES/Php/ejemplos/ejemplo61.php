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
echo "<h3>Busca un valor en una matriz</h3>";
echo " Busca el valor en la matriz: <b>#", in_array(3, $a),
    "#</b> Si no ha puesto nada no estaba, si 1 lo encontró <BR>";
echo " Busca el valor en la matriz: <b>#", in_array(7, $a),
    "#</b> Si no ha puesto nada no estaba, si 1 lo encontró <BR>";
echo " Busca el valor en la matriz: <b>#", in_array("gris", $b),
    "#</b> Si no ha puesto nada no estaba, si 1 lo encontró <BR>";
echo " Busca el valor en la matriz: <b>#", in_array("blanco", $b),
    "#</b> Si no ha puesto nada no estaba, si 1 lo encontró <BR><br>";
echo "<h3>Posicionandose y determinando indices actuales</h3>";
echo "Este el valor asoaciado al indice 3 de la matriz a: ", $a[3], "<br>";
echo "El puntero interno apunta a la clave: ", key($a), "<br>";
echo "Este es el valor siguiente al anterior: ", next($a), "<br>";
echo "El puntero interno apunta a la clave: ", key($a), "<br>";
echo "Este es el primer valor de la matriz a: ", reset($a), "<br>";
echo "El puntero interno apunta a la clave: ", key($a), "<br>";
echo "Este es el ultimo valor de la matriz a: ", end($a), "<br>";
echo "El puntero interno apunta a la clave: ", key($a), "<br>";
echo "Este es el penúltimo valor de la matriz a: ", prev($a), "<br>";
echo "El puntero interno apunta a la clave: ", key($a), "<br>";
echo "Este es el mismo valor anterior: ", pos($a), "<br>";
echo "El puntero interno apunta a la clave: ", key($a), "<br>";
echo "Este el valor asoaciado al indice 4 de la matriz b: ", $b[4], "<br>";
echo "El puntero interno apunta a la clave: ", key($b), "<br>";
echo "Este es el valor siguiente al anterior: ", next($b), "<br>";
echo "El puntero interno apunta a la clave: ", key($b), "<br>";
echo "Este es el primer valor de la matriz a: ", reset($b), "<br>";
echo "El puntero interno apunta a la clave: ", key($b), "<br>";
echo "Este es el ultimo valor de la matriz a: ", end($b), "<br>";
echo "El puntero interno apunta a la clave: ", key($b), "<br>";
echo "Este es el penúltimo valor de la matriz a: ", prev($b), "<br>";
echo "El puntero interno apunta a la clave: ", key($b), "<br>";
echo "Este es el mismo valor anterior: ", pos($b), "<br>";
echo "El puntero interno apunta a la clave: ", key($b), "<br>";
