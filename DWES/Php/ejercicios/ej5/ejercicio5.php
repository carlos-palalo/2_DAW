<html>
    <head>
    </head>
    
    <body>
        <center><b>Este es el ejemplo de la web</b></center>
        <?php
            $a=100;
            echo "Este es el valor de a:&nbsp;",$a, "<br>";
            $a= "Bien Palmerin";
            echo "Ahora a vale:&nbsp;", $a, "<br>";
            
            function cambio($a)  {
                echo "Antes el nombre de la variable era:&nbsp;",$a, "<br>";
                $a= "Rafael Palmero";
                echo "Ahora la variable a es:&nbsp;",$a, "<br>";
            }

            cambio($a);
            echo "Arriba el valor era:&nbsp;",$a,"<br>";
        ?>
        <br>
        <center><b>Este es el ejemplo de Jose Luis</b></center>
        <center><b>Una misma variable con dos valores distintos</b></center>
        <?php
            $cadena = "Soy una cadena y este es mi valor";
            echo "El valor de la cadena es: $cadena<br>";
            $cadena = "Ahora valgo este otro valor";
            print "El valor de la cadena es $cadena<br>";
        ?>
        <center><b>Ahora empleo una funció con una variable llamada igual</b></center>
        <?php
            function simple(){
                $cadena = "Estoy dentro de la función";
                echo "El valor de la variable dentro de la función es: $cadena<br>";
            }
            simple();
        ?>
        <center><b>Fuera de la función de nuevo</b></center>
        <?php
            print("El valor de la cadena es: $cadena<br>");
        ?>
    </body>
</html>