<?php
class Multiplica
{
    var $factor1 = 7;
    var $factor2 = 8;
    function Multiplica()
    {
        print $this->factor1 * $this->factor2 . "<br>";
    }
}
$objeto = new Multiplica;
