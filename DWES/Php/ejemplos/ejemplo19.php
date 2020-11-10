<?php
    # Crearemos un array escalar (basta con definir un elemento)
    $a[2]="Este elemento es el segundo del array";
    # creemos un nuevo elemento de ese array
    # esta vez de forma automática
    # si ponemos corchetes vacíos va añadiendo índices automaticamente
    $a[]="¿Será este tercero?";
    # comprobemos que le ha puesto índice 3
    echo "El elemento ".$a[3]." tiene indice 3 (siguiente a 2) <br>";
    # ahora insertemos un nuevo elemento con indice 32
    $a[32]="Mi indice es 32";
    # insertemos otro elemento de forma automática
    $a[]= "¿Irá a parar al indice 33 este elemento?";
    # la inserción se hará con indice 33, comprobémoslo
    print "Vemos que contiene el elemento de indice 33 ...".$a[33]."<br>";
    # ¿qué ocurrirá si pido que imprima el elemento 21 que nadie ha definido
    # seguramente estará vacio, ¡¡comprobémoslo!!
    print ("Aqui--> ". $a[21]. "<--- si es que hay algo<br>");
    # ahora crearemos un nuevo array llamado $b
    # insertémosle de forma automatica su PRIMER elemento
    $b[]="Estoy empezando con el array b y mi indice será cero";
    # comprobemos que efectivamente ha empezado con indice CERO
    print ($b[0]."<br>");
    # veamos ahora eso de los arrays asociativos
    # creemos uno llamado $c con varios elementos
    $c["objeto"]="coche";
    $c["color"]="rojo";
    $c["tamaño"]="ideal";
    $c["marca"]= "Ferrari";
    $c["precio"]="prohibitivo para un humilde docente";
    #encadenemos variables para hacer una salida
    # pondremos cadenas " " para que no aparezcan los textos
    # pegados unos a otros..
    $salida="<H2> El ". $c["objeto"] ." ".$c["marca"]." ".$c["color"];
    $salida .=" tiene el tamaño ideal ".$c["tamaño"];
    $salida .=" y su precio es ".$c["precio"];
    $salida .="</H2>";
    print $salida;
    # sigamos experimentando ahora
    # ¿qué ocurriría si nos olvidamos de poner nombre al indice
    # e insertamos un corchete vacio ¿lo crearía?¿que indice pondria?
    # probemos ....
    $c[]="¿creará un array escalar nuevo y le pondrá indice cero?";
    # tratemos ahora de visualizar esa variable
    # probemos a escribir $c[0] porque PHP
    # habrá entendido que queremos un array escalar
    # y como no existe ninguno con ese nombre empezará por cero
    # comprobémoslo
    echo $c[0];
?>