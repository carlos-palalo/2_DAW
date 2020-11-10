<?php
class Operaciones
{
    var $inicializada = 32;
    var $num1;
    var $num2;
    var $suma;
    var $diferencia;
    var $producto;
    var $cociente;
    var $contador = 0;
    function Operaciones($val1 = 45, $val2 = 55)
    {
        $this->contador += 1;
        $c = $this->contador;
        $this->num1[$this->contador] = $val1;
        $this->num2[$c] = $val2;
        $this->suma[$c] = $val1 + $val2;
        $this->diferencia[$c] = $val1 - $val2;
        $this->producto[$c] = $val1 * $val2;
        $this->cociente[$c] = $this->inicializada * $val1 / $val2;
    }
    function imprime()
    {
        print "<table align=center border=1>";
        print "<td>Num 1</td><td>num2</td><td>Suma</td>";
        print "<td>Diferencia</td><td>Producto</td><td>Cociente</td><tr>";
        foreach ($this->num1 as $clave => $valor) {
            print "<td align=center>" . $valor . "</td>";
            print "<td align=center>" . $this->num2[$clave] . "</td>";
            print "<td align=center>" . $this->suma[$clave] . "</td>";
            print "<td align=center>" . $this->diferencia[$clave] . "</td>";
            print "<td align=center>" . $this->producto[$clave] . "</td>";
            print "<td align=center>" . $this->cociente[$clave] . "</td><tr>";
        }
        print "</table>";
    }
}
$objeto = new Operaciones;
for ($i = 1; $i < 4; $i++) {
    for ($j = 1; $j < 4; $j++) {
        $objeto->Operaciones($i, $j);
    }
}
$objeto->imprime();
