<?php
class Multiplica
{
    var $resultado;
    var $indice = 0;
    function curratelo($a, $b)
    {
        $this->resultado[$this->indice] = $a * $b;
        $this->indice++;
    }
    function imprimelo()
    {
        foreach ($this->resultado as $valor) {
            echo $valor, "<br>";
        }
    }
}
$objeto = new Multiplica;
$objeto->curratelo(7, 3);
$objeto->curratelo(11, 4);
$objeto->curratelo(-23, 11);
$objeto->imprimelo();
