<?php
# esta es la variable que controlará la función switch
$i = 1;
switch ($i) {
        #insertamos la etiqueta case 0 y a continuación
        # las instrucciones correspondientes
    case 0:
        print "i es igual a 0 - No he puesto el break<br>";
        # insertamos la etiqueta case 1 y a continuación
        # las instrucciones correspondientes
        # como no hemos puesto break y en este ejemplo $i=1
        # se ejecutarán todas las instrucciones escritas
        # de aquí en adelante
    case 1:
        print "i es igual a 1 - No he puesto el break<br>";
    case 2:
        print "i es igual a 2 - No he puesto el break<br>";
};
# ahora incluiremos break al final de las intrucciones de cada case
# con ello lograremos que solo se ejecuten las intrucciones correspondientes
# a cada uno de ellos
switch ($i) {
    case 0:
        print "i es igual a 0 - Ahora lleva break<br>";
        break;
    case 1:
        print "i es igual a 1 - Ahora lleva break<br>";
        break;
    case 2:
        print "i es igual a 2 - Ahora lleva break<br>";
        break;
}
