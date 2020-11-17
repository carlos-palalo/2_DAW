
<?php 

$base="carlos";

# establecemos la conexión con el servidor

$conexion=mysqli_connect ("localhost","carlos","carlos");

#Seleccionamos la BASE DE DATOS en la que PRETENDEMOS TRABAJAR

mysqli_select_db ($conexion,$base);

#recogemos del formulario la matriz borra[] que tiene como indices
#los dni de todos los registros de las bases de datos
# en los que la variable contenga el  valor Si (los marcados)
# los registros no marcados (en el checkbox) no son transferidos
# por lo que TODOS LOS ELEMENTOS DEL ARRAY CORRESPONDEN A DNI'S ELEGIDOS PARA BORRAR

#leemos ese array completo usando el bucle foreach y
#recogemos el indice y el valor en $indice y $valor

foreach ($_POST['borra'] as $indice=>$valor){
	
		#ejecutamos la instruccion DELETE filtrada por WHERE
		# para que borre el registro en el que coincida DNI con el indice


		mysqli_query($conexion,"DELETE FROM demo42 WHERE (DNI=$indice)");
		mysqli_query($conexion,"DELETE FROM demodat421 WHERE (DNI=$indice)");
		mysqli_query($conexion,"DELETE FROM demodat422 WHERE (DNI=$indice)");
		mysqli_query($conexion,"DELETE FROM demodat423 WHERE (DNI=$indice)");

               
$num_borrados +=mysqli_affected_rows($conexion);
# despues de borrar los registros en las cuatro tablas
# para asegurar la integridad referencial
# cerramos el bucle while

        }

print ("Se han borrado ".$num_borrados." registros");


# cerramos la conexion

	

mysqli_close($conexion);




?>









