<?php
$A = 3;
$B = "4";
if ($A == $B) {
    #estas instrucciones se ejecutarian si se cumple la condición
    print("A es igual B");
    echo "<br>";
    echo "Este if tiene varias intrucciones";
} else {
    # estas se ejecutarian en el caso de no cumplirse
    # las condiciones epecificadas en el fi
    print("A no es igual que B");
    echo "<br>";
    echo ("La estructura de control se ha desviado al else");
}
