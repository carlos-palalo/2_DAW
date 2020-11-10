<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    echo "El method que ha usado fué: ",'$REQUEST_METHOD',"<br>";
    echo "Nombre: ",$_POST['nombre'],"<br>";
    echo "Apellidos ",$_POST['apellidos'],"<br>";
    echo "Direccion: ",$_POST['direccion'],"<br>";
    echo "Telefono: ",$_POST['tlf'],"<br>";
    echo "Email: ",$_POST['email'],"<br>";
    echo "Títulos: ",$_POST['eso'],"<br>";
    echo $_POST['gm'],"<br>";
    echo $_POST['gs'],"<br>";
?>