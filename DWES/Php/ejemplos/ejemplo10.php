<HTML>

<HEAD>
</HEAD>

<BODY>
    <?php
        # La constante del sistema __FILE__ nos devolverá
        echo "La ruta completa de este fichero es: ";
        echo __FILE__;
        # La constante del sistema __LINE__ nos devolverá
        # el número de línea que se está interpretando
        # también cuenta las líneas en blanco
        # cuenta las líneas y verás que devuelve ... 16
        echo "<br>Esta es la línea: ",__LINE__, "del fichero";
        echo "<br>Estamos utilizando la versión: ",PHP_VERSION, " de PHP";
        echo "<br>El PHP se está ejecutando desde el sistema operativo: ",PHP_OS;
    ?>
</BODY>

</HTML>