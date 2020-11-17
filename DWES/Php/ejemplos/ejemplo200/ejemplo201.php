
<?php 

$base="carlos";

# establecemos la conexión con el servidor

$conexion=mysqli_connect ("localhost","carlos","carlos");

#Seleccionamos la BASE DE DATOS en la que PRETENDEMOS TRABAJAR

mysqli_select_db ($conexion,$base);


# escribimos un bucle que nos lea la matriz pasada desde el formulario
# de modificación de datos
# el indice de esa matriz sera el DNI (fijate en el codigo fuente del formulario)
# y el valor asociado la puntuación tecleada en el formulario
# que será el valor con el que se modificará la tabla

# la instruccion WHERE obliga a que cada valor se asigne en la tabla
# al registro cuyo DNI coincide con el indice de la matria transferida desde el formulario

foreach ($_POST['ident'] as $indice=>$valor){
 
$resultado=mysqli_query($conexion,"UPDATE demodat422 SET Puntos=$valor WHERE DNI=$indice");

	
	}

#cerramos la conexion

mysqli_close($conexion);


# cerramos la etiqueta PHP y desde HTML llamamos a la página que visualiza los valores
# si todo ha ido bien :-) los campos apareceran actualizados

?>

<script language="JavaScript">

window.self.location="ejemplo200.php";

</script>
/

