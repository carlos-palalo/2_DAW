<?php
$A = 500;
do {
    if ($A >= 500) {
        echo "No puede ejecutarse el bucle, porque no se cumple la condicion";
        break;
    }
    ++$A;
    echo "Valores de A usando el do: ", $A, "<br>";
} while ($A < 500);
echo "<BR>He salido del bucle porque A es: ", $A;
