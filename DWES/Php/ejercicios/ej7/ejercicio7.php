<?php
    # Definamos una variable y asignémosle un valor
    $color="rojo";
    # Definamos ahora una nueva variable de nombre variable
    # usando para ello la variable anterior
    $$color=" es mi color preferido";
    # Veamos impresos los contenidos de esas variables
    print ( "El color ".$color. $$color ."<br>");
    #o también
    print ( "El color ".$color. ${$color}."<br>");
    # o también
    print ( "El color ".$color. $rojo."<br>");
    # advirtamos lo que va a ocurrir al visualizar la página
    print ("Las tres líneas anteriores deben decir lo mismo<br>");
    print ("Hemos invocado la misma variable de tres formas diferentes<BR>");
    # cambiemos ahora el nombre del color
    $color="magenta";
    
    /* La variable $rojo seguirá existiendo. El hecho de cambiar el valor a $color no significa que vayan a modificarse las variables creadas con su color anterior ni que se creen automáticamente variables que tengan por nombre el nuevo valor de $color */
    # Pongamos un mensaje de advertencia para que sea visualizado en la salida
    print ("Ahora la variable $color ha cambiado a magenta<br>");
    print ("pero como no hemos creado ninguna variable con ese color<br>");
    print ("en las lineas siguientes no aparecerá nada <br>");
    print ("detrás de la palabra magenta <br>");
    # Escribimos los print advertidos
    print (" El color ".$color.$$color."<br>");
    print (" El color ".$color.${$color}."<br>");
    
    # Comprobemos que la variable $rojo creada como variable de variable
    # cuando $color="rojo" aún existe y mantiene aquel valor
    print ("Pese a que $color vale ahora ".$color."<br>");
    print ("la vieja variable $rojo sigue existiendo <br>");
    print ("y conserva su valor. Es este: ".$rojo);
?>