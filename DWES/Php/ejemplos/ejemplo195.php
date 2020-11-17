<?php 

# definimos una variable con el NOMBRE DE LA BASE DE DATOS


$base="carlos";

#definimos otra variable con el NOMBRE de LA TABLA ORIGEN DE LOS DATOS

$tabla="demo4";

#definimos UN ARRAY con los nombres de las tablas a crear


$tablanuev[]="demodat1";
$tablanuev[]="demodat2";
$tablanuev[]="demodat3";

# establecemos la conexión con el servidor

$c=mysqli_connect ("localhost","carlos","carlos");

#Seleccionamos la BASE DE DATOS en la que PRETENDEMOS TRABAJAR

mysqli_select_db ($c,$base);


#establecemos el bucle que repetira la creación de tabla
#hasta leer el array completo (en este caso de CERO a DOS)
#que son los indices del array de nombres

for ($i=0;$i<3;$i++){

$crear="CREATE TABLE  $tablanuev[$i] (";
$crear.="DNI CHAR(8) NOT NULL,  ";
$crear.="Puntos Decimal (6,3)  NOT NULL DEFAULT 0, ";
$crear.=" PRIMARY KEY(DNI) ";
$crear.=")";
 if(mysqli_query ($c,$crear)) {
echo "<h2> Tabla $tablanuev[$i] creada con EXITO </h2><br>";
	}else{
echo "<h2> La tabla $tablanuev[$i] NO HA PODIDO CREARSE ";
#echo mysql_error ($c)."<br>";
$numerror=mysqli_errno ($c);
	if ($numerror==1050){echo "porque YA EXISTE</h2>";}
}

#cerramos el bucle for
}

#ahora leeremos la tabla ORIGEN DE LOS DATOS
# y añadimos un registro a cada una de las otras tres tablas
# en el que insertamos el DNI de la original


$resultado=mysqli_query($c,"SELECT * FROM demo42 ");
while ($row = mysqli_fetch_array($resultado)){
        $mete=$row['DNI'];
	mysqli_query($c,"INSERT $tablanuev[0] (DNI, Puntos) VALUES ('$mete', 0)");
	mysqli_query($c,"INSERT $tablanuev[1] (DNI, Puntos) VALUES ('$mete', 0)");
	mysqli_query($c,"INSERT $tablanuev[2] (DNI, Puntos) VALUES ('$mete', 0)");
}






# cerramos la conexión... y listo...

 		mysqli_close($c)
?> 

