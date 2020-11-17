
<?php 

$base="carlos";

# establecemos la conexión con el servidor

$c=mysqli_connect ("localhost","carlos","carlos");

#Seleccionamos la BASE DE DATOS en la que PRETENDEMOS TRABAJAR

mysqli_select_db ($c,$base);



# establecemos el nombre de la tabla en una variable


$tabla="demodat421";

# asignamos el valor a escribir en todos los registros a una varibale

$valor=7;

# hacemos la llamada a MySQL mediante la función mysql_query
# y le decimos que UPDATE (modifique) la tabla
# y que lo haga (SET) en el campo Puntos 
# poniendo el valor que en este caso es 7
 
$resultado=mysqli_query($c,"UPDATE $tabla SET Puntos=$valor");

# cerramos la conexión con la base de datos	
	

mysqli_close($c);

# escribimos un mensaje para que nos avise del final de proceso de actualización

echo "<h2>Proceso de actualización terminado</h2>";


# cerramo el script PHP
?>

<!--
###################################################################
#   AHORA YA ESTAMOS EN HTML (hemos cerrado el script PHP con ?>  #
###################################################################

      escribimos esta script de JAVASCRIPT 
     para que el navegador cargue en la ventana actual
     la página que nos permite visualizar el contenido
     de las tablas y que es un ejemplo que hemos desarrollado
     en la página anterior.
     Como observarás esta llamada no la hacemos desde PHP
     sino desde JavaScript, la razón es simple:
     PHP se ejecuta en el servidor SIEMPRE
     JavaScript se ejecuta siempre el el cliente (navegador del usuario)
     y lo que pretendemos ahora es que el navegador del usuario
     cargue la página indicada  -->



<script language="JavaScript">
window.self.location="../ejemplo196/ejemplo196.php";
</script>
