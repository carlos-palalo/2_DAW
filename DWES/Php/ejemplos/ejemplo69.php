<?php
# asignamos valores a dos variables
$a = 3;
$b = 5;
# escribimos una función que eleva la variable a
# a la potencia indicada en b
# insertando return delante de la operación
function a1($a, $b)
{
    return pow($a, $b);
}
#incluimos en la instruccion echo una llamada
# a la función y en ella pasamos los valores
# recogidos en las variables a y b
# return conseguirá que se ejecute esa función
# y que echo recoja e imprima el resultado
echo "El valor de a elevado a b es: ", a1($a, $b), "<br>";
# esta otra función generará y devolverá un array
# con los resultados de la ejecucion del bucle for
function a2($a, $b)
{
    for ($i = 0; $i <= $b; $i++) {
        $z[] = pow($a, $i);
    }
    return $z;
}
# hacemos una llamada a la función
$p = a2($a, $b);
# leemos el array devuelto desde fuera de la función
foreach ($p as $clave => $valor) {
    echo "El valor de a (3) elevado a: ", $clave, " es: ", $valor, "<br>";
}
echo "<br>";
# otra forma de leer el array con los resultados de la funcion
list($r, $s, $t, $u) = a2($a, $b);
echo "Este es el valor recogido en la variable r :", $r, "<br>";
echo "Este es el valor recogido en la variable s :", $s, "<br>";
echo "Este es el valor recogido en la variable t :", $u, "<br>";
