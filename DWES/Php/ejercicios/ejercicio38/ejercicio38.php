<?php
$c=mysqli_connect ("localhost","carlos","carlos") or die ("Imposible conectar");
mysqli_select_db ($c,"carlos");
$crear="CREATE TABLE IF NOT EXISTS ";
$crear .="tabla1 ";
$crear .="( ";
$crear .="DNI VARCHAR(10), ";
$crear .="nombre VARCHAR(15),  ";
$crear .="apellido1 VARCHAR(10),  ";
$crear .="apellido2 VARCHAR(10),  ";
$crear .="fecha_naci DATE,  ";
$crear .="repetidor ENUM('Si','No'),  ";
$crear .="PRIMARY KEY(DNI) ";
$crear .=")";
if(mysqli_query($c,$crear)){
	print "Se ha creado la tabla<br>";
	print "La sentencia MySQL podríamos haberla escrito asi:<br>";
        echo $crear;
	
}
else{
    print "Se ha producido un error al crear la tabla";
}
?>



