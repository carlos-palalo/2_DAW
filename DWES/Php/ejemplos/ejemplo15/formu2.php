<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    echo "El method usado fué: ",$_SERVER['REQUEST_METHOD'],"<br>";
    echo $_POST['nombre'],"<br>";
    echo $_POST['clave'],"<br>";
    echo $_POST['color'],"<br>";
    echo $_POST['acondicionado'],"<br>";
    echo $_POST['tapiceria'],"<br>";
    echo $_POST['llantas'],"<br>";
    echo $_POST['precio'],"<br>";
    echo $_POST['texto'],"<br>";
    echo $_POST['oculto'],"<br>";
?>