<?php
class Multiplica
{
    var $producto;
    function Multiplica($a = 3, $b = 7)
    {
        $this->producto = $a * $b;
        print $this->producto . "<br>";
    }
}
$objeto = new Multiplica;
$objeto->Multiplica(90, 47);
$objeto->Multiplica(47);
$objeto->Multiplica();
