<?php
# recogemos en una variable el nombre de BASE DE DATOS

$base="carlos";

# recogemos en una variable el nombre de la TABLA

$tabla="demo4";

# establecemos la conexion con el servidor

$conexion=mysqli_connect("localhost","carlos","carlos");

#asiganamos la conexión a una base de datos determinada

mysqli_select_db($conexion,$base);

# AÑADIMOS EL NUEVO REGISTRO

mysqli_query($conexion,"INSERT $tabla (DNI,Nombre,Apellido1,Apellido2, Nacimiento,Sexo,Hora,Fumador,Idiomas) VALUES ('1234','Lupicinio','Servidor','Servido','1954-11-23','M','16:24:52',NULL,3)");

#comprobamos el resultado de la insercion
# el error CERO significa NO ERROR
# el error 1062 significa Clave duplicada
# en otros errores forzamos a que nos ponga el número de error
# y el significado de ese error (aunque sea en ingles)....


if (mysqli_errno($conexion)==0){echo "<h2>Registro AÑADIDO</b></H2>";
             }else{
		if (mysqli_errno($conexion)==1062){echo "<h2>No ha podido añadirse el registro<br>Ya existe un campo con este DNI</h2>";
			}else{ 
			$numerror=mysqli_errno($conexion);
			$descrerror=mysqli_error($conexion);
			echo "Se ha producido un error nº $numerror que corresponde a: $descrerror  <br>";
		}

}

# cerramos la conexion

 mysqli_close($conexion);

?>
      




