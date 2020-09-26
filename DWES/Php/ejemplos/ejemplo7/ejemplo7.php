<HTML>

<HEAD>
    <TITLE>Ejemplo 7</TITLE>
</HEAD>

<BODY>
    <?php
        // Este comentario no se verá en la página
        echo "Esto se leerá <BR> "; // Esto no se leerá
        /* Este es un comentario de
        múltiples líneas y no se acabará
        hasta que no cerremos así.... */
        echo "Este es el segundo comentario que se leerá<BR>";
        # Este es un comentario tipo shell que tampoco se leerá
        # Este, tampoco
        echo ("Aquí el tercer texto visible"); #comentario invisible
        /* Cuidado con anidar
        /* comentarios
        multilinea con estos*/
        al PHP no le gustan */
    ?>
</body>

</html>