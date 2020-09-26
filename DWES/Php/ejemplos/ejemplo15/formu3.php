<?php
    echo "El method usado fué: ",$HTTP_SERVER_VARS[REQUEST_METHOD],"<br>";
    echo $HTTP_GET_VARS['nombre'],"<br>";
    echo $HTTP_GET_VARS['clave'],"<br>";
    echo $HTTP_GET_VARS['color'],"<br>";
    echo $HTTP_GET_VARS['acondicionado'],"<br>";
    echo $HTTP_GET_VARS['tapiceria'],"<br>";
    echo $HTTP_GET_VARS['llantas'],"<br>";
    echo $HTTP_GET_VARS['precio'],"<br>";
    echo $HTTP_GET_VARS['texto'],"<br>";
    echo $HTTP_GET_VARS['oculto'],"<br>";
?>