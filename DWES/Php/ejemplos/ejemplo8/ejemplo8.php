<HTML>

<HEAD>
    <TITLE>Constantes</TITLE>
</HEAD>

<BODY>
    <?php
        /* Definiremos la constante EurPta y le asignaremos el valor 166.386 */
        define("EurPta",166.386);
        /* Definiremos la constante PtaEur asignándole el valor 1/166.386
        En este caso el valor de la constante es el resultado
        de la operación aritmética dividir 1 entre 166.386*/
        define("PtaEur",1/166.386);
        /* Definimos la constante Cadenas y le asignamos el valor:
        12Esta constante es una cadena*/
        define("Cadena","12Esta constante es una cadena");
        /* Definimos la constante Cadena2 y le asignamos el valor:
        12.54Constante con punto decimal*/
        define("Cadena2","12.54Constante con punto decimal");
        /* Comprobemos los valores.
        Observa la nueva forma en la que utilizamos echo
        Lo hacemos enlazando varias cadenas separadas con
        punto y/o coma, según se trate de echo o de print */
        echo "Valor de la constante EurPta: ", EurPta, "<BR>";
        echo "Valor de la constante PtaEur: ". PtaEur . "<BR>";
        print "Valor de la constante Cadena: " . Cadena . "<BR>";
        print "Valor de la constante Cadena x EurPta: " . Cadena*EurPta ."<br>";
        print "Valor de la constante Cadena2 x EurPta: " . Cadena2*EurPta ."<br>";
        echo "Con echo los números no necesitan ir entre comillas: " ,3,"<br>";
        print "En el caso de print si son necesarias: " . "7" . "<br>";
        print ("incluso entre paréntesis necesitan las comillas: "."45"."<br>");
        print "Solo hay una excepción en el caso de print. ";
        print "Si los números van en un print independiente no necesitan comillas
        ";
        print 23;
        # Pondremos la etiqueta de cierre del script y escribiremos
        # una línea de código HTMAL
    ?>
    
    <br>Ahora veremos los mismos resultados usando la function prueba<br><br>
    
    <?php
        # Estamos dentro de un nuevo script abierto por el <? anterior
        /* Aunque aún no la hemos estudiado, escribiremos una función
        a la que (tenemos que ponerle siempre un nombre)
        vamos a llamar prueba()
        Lo señalado en rojo es la forma de indicar el comienzo
        y el final de la funcion
        Lo marcado en azul son las instrucciones
        que deben ejecutarse cuando la función prueba()
        sea invocada */
        function prueba(){
        echo "Valor de la constante EurPta: ". EurPta . "<BR>";
        print "Valor de la constante PtaEur: ". PtaEur. "<BR>";
        echo "Valor de la constante Cadena: ", Cadena , "<BR>";
        print ("Valor de la constante Cadena x EurPta: " .
        Cadena*EurPta . "<br>");
        print ("Valor de la constante Cadena2 x EurPta: " .
        Cadena2*EurPta . "<br>");
        }
        # Las funciones solo se ejecutan cuando son invocadas
        /* La función anterior no se ejecutará hasta que escribamos
        una línea –como esta de abajo– en la que ponemos
        únicamente el nombre de la función: prueba()
        */
    ?>
    
    <?php
        prueba();
    ?>
</body>

</HTML>