<?php
include("C:/xampp/htdocs/php/seguridad/mysql.inc.php");
//include("C:/xampp/htdocs/php/seguridad/adodb-time.inc.php");
conecta1($c);
if(mysqli_close($c)){
	print "<br>Se ha cerrado la conexión con el servidor de bases de datos<BR>";
}

?>

