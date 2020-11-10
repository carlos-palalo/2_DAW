<?php
class Multiplica
{
    var $resultado;
    function curratelo($a, $b)
    {
        $this->resultado = $a * $b;
    }
    function imprimelo()
    {
        echo $this->resultado, "<br>";
    }
}
$objeto = new Multiplica;
$objeto->curratelo(7, 3);
$objeto->curratelo(11, 4);
$objeto1 = new Multiplica;
$objeto1->curratelo(-23, 11);
$objeto->imprimelo();
$objeto1->imprimelo();
