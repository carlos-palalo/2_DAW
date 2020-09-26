<?php
    echo "El method usado fué: ",$HTTP_SERVER_VARS[REQUEST_METHOD],"<br>";
    echo $HTTP_POST_VARS['nombre'],"<br>";
    echo $HTTP_POST_VARS['clave'],"<br>";
    echo $HTTP_POST_VARS['color'],"<br>";
    echo $HTTP_POST_VARS['acondicionado'],"<br>";
    echo $HTTP_POST_VARS['tapiceria'],"<br>";
    echo $HTTP_POST_VARS['llantas'],"<br>";
    echo $HTTP_POST_VARS['precio'],"<br>";
    echo $HTTP_POST_VARS['texto'],"<br>";
    echo $HTTP_POST_VARS['oculto'],"<br>";
?>