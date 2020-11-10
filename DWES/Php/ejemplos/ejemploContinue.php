<?php
$j = 0;
$k = 0;
do {
    while (++$j <= 5) {
        for ($i = 1; $i <= 5; $i++) {
            if ($i == 2) {
                continue 3;
            }
            echo "El valor de k es: ", $k,
                " y el valor de j es: ",
                $j,
                " y el de i es: ",
                $i,
                "<br>";
        }
    }
} while ($k++ <= 5);
