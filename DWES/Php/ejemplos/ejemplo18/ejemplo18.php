<?php
    #definamos y asignemos valores a variables tipo cadena
    $cadena1="Esto es una cadena de texto";
    $cadena2="Esta es una segunda cadena de texto";
    
    #hagamos lo mismo con variables numéricas
    $cadena3=127;
    $cadena4=257.89;
    
    # unámoslas mezclando tipos
    $union1=$cadena1 . $cadena2;
    $union2=$cadena1 . $cadena3;
    $union3=$cadena3 . $cadena4;
    
    #veamos que ha ocurrido
    echo $union1,"<br>";
    echo $union2,"<br>";
    echo $union3,"<br>";
    
    # modifiquemos ahora una cadena
    # añadiendole contenidos
    $cadena3 .=" Este es el texto que se añadirá a la variable cadena3";
    
    # imprimamos los resultados
    echo $cadena3,"<br>";
    
    # añadamos ahora un nuevo trozo, esta vez
    # a partir de una cadena escrita con la
    # sintaxis de documento incrustado
    $cadena3 .= <<<Pepito
        Ahora le añado a la cadena
        este trocillo asignado con el "formato"
        de documento incrustado
    Pepito;
    
    # visualicemos el resultado
    echo $cadena3,"<br>";
?>