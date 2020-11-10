<?php
class A
{
    function ejemplo()
    {
        echo "Este es el resultado de la función ejemplo<br>";
    }
}
# llamo a la funcion sin crear un nuevo objeto
# usando ::
A::ejemplo();
#ahora creo el objeto $b y llamo a la función
$b = new A;
$b->ejemplo();
