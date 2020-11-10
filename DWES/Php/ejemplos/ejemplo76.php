<?php
class Multiplica
{
    var $factor1 = 7;
    var $factor2 = 8;
    function Multiplica()
    {
        print $this->factor1 * $this->factor2 . "<br>";
        print "Esto está en el constructor de la clase padre<br>";
    }
}
class MeSeOlvido extends Multiplica
{
    var $divisor = 5;
    function MeSeOlvido()
    {
        print $this->factor1 * $this->factor2 / $this->divisor . "<br>";
    }
}
$objeto = new MeSeOlvido;
$objeto->Multiplica();
