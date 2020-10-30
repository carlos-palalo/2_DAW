<?php
    # Observa que hemos prescindido de los encabezados HTML.
    # No son imprescindibles para la ejecución de los scripts
    /* Escribamos una función y llamémosla sinEstaticas. Definamos en ella dos variables sin ninguna otra especificación e insertemos las instrucciones para que al ejecutarse se escriban los valores de esas variables */
    function sinEstaticas(){
        # Pongamos aquí sus valores iniciales
        $a=0;
        $b=0;
        # Imprimamos estos valores iniciales
        echo "Valor inicial de $a: ",$a,"<br>";
        echo "Valor inicial de $b: ",$b,"<br>";
        /* Modifiquemos esos valores sumando 5 al valor de $a y restando 7 al valor de $b. $a +=5 y $b -=7 serán quienes haga esas nuevas asignaciones de valor ya lo iremos viendo, no te preocupes */
        $a +=5;
        $b -=7;
        # Visualicemos los nuevos valores de las variables
        echo "Nuevo valor de $a: ",$a,"<br>";
        echo "Nuevo valor de $b: ",$b,"<br>";
    }
    
    # Escribamos ahora la misma función con una modificación que será
    # asignar la condición de estática a la variable $b
    # Llamemos a esa función: conEstaticas
    function conEstaticas(){
        # Definimos $b como estática
        $a=0;
        static $b=0;
        echo "Valor inicial de $a: ",$a,"<br>";
        echo "Valor inicial de $b: ",$b,"<br>";
        $a +=5;
        $b -=7;
        echo "Nuevo valor de $a: ",$a,"<br>";
        echo "Nuevo valor de $b: ",$b,"<br>";
    }
    
    # Insertemos un texto que nos ayude en el momento de la ejecución
    print ("Esta es la primera llamada a sinEstaticas()<br>");
    # Invoquemos la función sinEstaticas;
    sinEstaticas();
    # Añadamos un nuevo comentario a la salida
    print ("Esta es la segunda llamada sinEstaticas()<br>");
    print ("Debe dar el mismo resultado que la llamada anterior<br>");
    # Invoquemos por segunda vez sinEstaticas;
    sinEstaticas();
    # Hagamos ahora lo mismo con la función conEstaticas
    print ("Esta es la primera llamada a conEstaticas()<br>");
    conEstaticas();
    print ("Esta es la segunda llamada a conEstaticas()<br>");
    print ("El resultado es distinto a la llamada anterior<br>");
    conEstaticas();
?>