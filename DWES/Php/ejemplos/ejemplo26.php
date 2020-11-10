<?php
$a = 5;
# observa que ponemos la etiqueta de fin de script
# después de la llave de apertura
if ($a == 5) { ?>
    <!-- Aquí estamos poniendo HTML puro no estamos dentro del script PHP //-->
    <H1>Esto no ha sido interpretado por PHP</H1>
    <!-- en la linea siguiente a este comentario volveremos a PHP para insertar la llave que indica el fin del if //-->
<?php } ?>
<?php
# hagamos lo mismo cambiando {} por : endif
if ($a == 5) : ?>
    <!-- Aquí estamos poniendo HTML puro no estamos dentro del script PHP //-->
    <H2>Esto tampoco sido interpretado por PHP</H2>
    <!-- en la linea siguiente a este comentario volveremos a PHP para insertar la llave que indica el fin del if //-->
<?php endif; ?>