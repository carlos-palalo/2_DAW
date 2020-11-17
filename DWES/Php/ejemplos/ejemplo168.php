<?php
$base="carlos";

#definimos otra variable con el NOMBRE QUE QUEREMOS DAR A LA TABLA

$tabla="companeros";

# establecemos la conexión con el servidor

$c=mysqli_connect ("localhost","carlos","carlos");

#Seleccionamos la BASE DE DATOS en la que PRETENDEMOS CREAR LA TABLA



mysqli_select_db ($c,$base);

# creamos la cada con la sentencia de inserción de los campos

$crear="CREATE TABLE  $tabla ("; 
# definimos como autoincremental el campo contador
# de esta forma irá tomando valores automaticamente
# este tipo de campo va a requerir que lo definamos como campo INDICE
$crear.="Contador TINYINT(8)  UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,"; 
$crear.="DNI CHAR(8) NOT NULL,  "; 
$crear.="Nombre VARCHAR (20)  NOT NULL, "; 
$crear.="Apellido1 VARCHAR (15)  not null, "; 
$crear.="Apellido2 VARCHAR (15)  not null, "; 
# insertamos un valor por defecto en la fecha de nacimiento
$crear.="Nacimiento DATE DEFAULT '1970-12-21', "; 
$crear.="Hora TIME DEFAULT '00:00:00', "; 
# insertamos un campo tipo Enum
$crear.="Sexo Enum('M','F') DEFAULT 'M' not null, "; 
$crear.="Fumador CHAR(0) , "; 
$crear.="Idiomas SET(' Castellano',' Francés','Inglés',' Alemán',' Búlgaro',' Chino'), "; 
# ahor insertamos el indice principal que evitará que se puedan repetirse
# los numeros de DNI
$crear.=" PRIMARY KEY(DNI), ";
# el indice asociado al contador
# que por su caracter autonumerico es inevitable
$crear.=" UNIQUE auto (Contador)"; 
$crear.=")"; 



#Creamos la cadena, comprobamos si esa instrucción devuelve
# VERDADERO o FALSO
# y dependiendo de ellos insertamos el mensaje de exito o fracaso

 if(mysqli_query ($c,$crear)) {
echo "<h2> Tabla $tabla creada con EXITO </h2><br>";
	}else{
echo "<h2> La tabla $tabla NO HA PODIDO CREARSE ";
# echo mysql_error ($c)."<br>";
$numerror=mysqli_errno ($c);
	if ($numerror==1050){echo "porque YA EXISTE</h2>";}
};

# cerramos la conexión... y listo... 

 		mysqli_close($c);
?> 




