<?php    
    /* Ahora trataremos de comprobar que también podemos
    utilizar la superglobal $_GET como $_GET['a'] y $_GET['b'] con iguales resultados que las anteriores */
    # Un comentario para identificar el origen del resultado
    print("<br>El resultado siguiente ha sido generado usando \$_GET <br>");
    print ($_GET['a']." x ".$_GET['b']." = ".$_GET['a']*$_GET['b']);
?>