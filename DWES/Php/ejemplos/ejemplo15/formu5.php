<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    echo "El method que ha usado fué: ",$_SERVER["REQUEST_METHOD"],"<br>";
    echo $_GET['nombre'],"<br>";
    echo $_GET['clave'],"<br>";
    echo $_GET['color'],"<br>";
    echo $_GET['acondicionado'],"<br>";
    echo $_GET['tapiceria'],"<br>";
    echo $_GET['llantas'],"<br>";
    echo $_GET['precio'],"<br>";
    echo $_GET['texto'],"<br>";
    echo $_GET['oculto'],"<br>";
?>