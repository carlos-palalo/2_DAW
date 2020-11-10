<?php
$A = 3;
$B = "3";

# en este caso cerraremos entre llaves las lineas
# que deben ejecutarse si se cumple la condición
if ($A == $B) {
    print("A es igual B");
    echo "<br>";
    echo "Este if tiene varias instrucciones contenidas entre llaves";
}

# una sintaxis alternativa a las llaves
# sustituyamos la { por : y la } por endif
if ($A == $B) :
    print("A es igual B");
    echo "<br>";
    echo "Hemos cambiado {} por : endif";
endif;
