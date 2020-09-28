<h1>Respuestas Formulario PHP</h1>
<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    echo "Nombre: ",$_POST['nombre'],"<br>";
    echo "Apellidos ",$_POST['apellidos'],"<br>";
    echo "Edad: ",$_POST['edad'],"<br>";
    echo "Respuestas correctas: ",$_POST['r1']," ", $_POST['r4'],"<br>";
    echo "Respuestas erróneas: ",$_POST['r2']," ", $_POST['r3'],"<br>";
?>