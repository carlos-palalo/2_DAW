<?php
$i = 3;
switch ($i) {
    case 0:
        print "La variable i es 0<br>";
        break;
    case 1:
        print "La variable i es 1<br>";
        break;
    case 2:
        print "La variable i es 2<br>";
        break;
        # al intoducir default y dado que $i=3 se ejecutarán
        # las instrucciones contenidas aquí ya que la variable
        # no coincide con ninguno de los case establecidos
    default:
        print "La variable i es mayor que dos o menor que cero";
        break;
}
