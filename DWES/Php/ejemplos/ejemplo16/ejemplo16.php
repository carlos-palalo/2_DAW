<?php
    # definamos dos variables numéricas asignandoles valores
    $a=23; $b=34;
    
    /* hagamos una suma y escribamos directamente los resultados utilizando las instrucciones print y echo
    con todas sus posibles opciones de sintaxis */
    print("La suma de $a + $b es: " . $a . "+" . $b . "=" . ($a+$b)."<br>");
    print "La suma de $a + $b es: " . $a . "+" . $b . "=" . ($a+$b) ."<BR>";
    print ("La suma de $a + $b es: " . $a . "+" . $b . "=" . ($a+$b) ."<BR>");
    echo "La suma de $a + $b es: " . $a . "+" . $b . "=" . ($a+$b) ."<BR>";
    echo "La suma de $a + $b es: " , $a , "+" , $b . "=" , ($a+$b) ."<BR>";
    echo "La suma de $a + $b es: " , $a , "+" , $b , "=" , $a+$b ,"<BR>";
    
    # guardemos ahora el resultado de esa operación en una nueva variable
    $c=$a+$b;
    
    /*ahora presentemos el resultado utilizando esa nueva variable adviertiendo el la salida */
    print ("Resultados recogidos en una nueva variable<br>");
    print "La suma de $a + $b es: " . $a . "+" . $b . "=" . $c ."<BR>";
    print ("La suma de $a + $b es: " . $a . "+" . $b . "=" . $c ."<BR>");
    echo "La suma de $a + $b es: " . $a . "+" . $b . "=" . $c ."<BR>";
    echo "La suma de $a + $b es: " , $a , "+" , $b . "=" , $c ."<BR>";
    echo "La suma de $a + $b es: " , $a , "+" , $b , "=" , $c ,"<BR>";
    
    /* modifiquemos ahora los valores de $a y $b comprobando que el cambio no modifica lo contenido en la variable $c */
    $a=513; $b=648;
    print ("<br> C sigue valiendo: " . $c ."<br>");
    
    # experimentemos con los paréntesis en un supuesto de operaciones combinada
    # tratemos de sumar la variable $a con la variable $b
    # y multiplicar el resultado por $c.
    # Si escribimos print($a+$b*$c) nos hará la multiplicación antes que la suma
    print "<br>No he puesto paréntesis y el resultado es: ".($a+$b*$c);
    
    # Si escribimos print(($a+$b)*$c) nos hará la suma y luego multiplicará
    print "<br>He puesto paréntesis y el resultado es: ".(($a+$b)*$c);
?>