<?php
$a = 3;
# observa que ponemos la etiqueta de fin de script
# después de los dos puntos
if ($a == 5) : ?>
    <!-- Aquí estamos poniendo HTML puro no estamos dentro del script PHP //-->
    <H1>Esto no es PHP. A es igual 5</H1>
    <!-- en la linea siguiente a este comentario volveremos a PHP para insertar el else seguido de dos puntos y cerramos de nuevo el script con ?>//-->
<?php else : ?>
    <!-- Aquí más HTML para el (else) caso de que no se cumpla la condición //-->
    <H2>Esto no es PHP. Es el resultado del ELSE</H2>
    <!-- volveremos a PHP para insertar en endif que indica el fin del if //-->
<?php endif; ?>