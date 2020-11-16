
<?php 

#recogemos del formulario las variables Calificacion y Penitente
# en variables automaticas de PHP que serán $Calificacion y $Penitente
# atención a Mayusculas/Minusculas en nombres de variables
# recuerda que para PHP son DISTINTAS

$Calificacion=$_GET['Calificacion'];
$Penitente=$_GET['Penitente'];
$base="joseluis";

# establecemos la conexión con el servidor

$c=mysqli_connect ("localhost","joseluis","joseluis");

#Seleccionamos la BASE DE DATOS en la que PRETENDEMOS TRABAJAR

mysqli_select_db ($c,$base);

# establecemos el nombre de la tabla en una variable

$tabla="demodat422";

#########################################################################
# COMPROBACION DE LA EXISTENCIA DE UN REGISTRO CON ESE D.N.I.           #
#########################################################################

# Es una operación necesaria para advertir al usuario de la correcta realización
# del proceso de modificación.
# Si introducimos un DNI inexistente la función UPDATE no DARA MENSAJE DE ERROR
# aunque evidentemente NO LO ACTUALIZARA tampoco
#
# Para hacer esa comprobación tenemos múltiples opciones una de ellas sería
# contar los registros en los que el DNI es igual al valor recibido en la variable
# $Penitente
# Si existiera el DNI devolvería UNO en el índice CERO DEL ARRAY
# recuerda que los indices de ese array se corresponden con el orden
# en el que han sido insertados los campos en la opcion SELECT
# en este caso solo ponemos uno... COUNT(DNI) por lo que el índice del array
# ha de ser el primero de los posibles que como sabes es CERO

$resultado=mysqli_query($c,"SELECT DNI FROM $tabla WHERE (DNI=$Penitente)");
$comprueba=mysqli_num_rows($resultado);

#HACEMOS LA COMPROBACION
# y en caso de inexistencia del recogemos en una variable ($Avisar)
# la cadena del mensaje de inexistencia
# en otro caso (cuando el DNI existe) hacemos que ese mensaje sea la cadena vacia

if($comprueba==0) {$avisar="<h2>No existe nadie con DNI ".$Penitente. " en la base de datos<br>Su Modificacion anterior no ha sido procesada</h2>";
			}else{
		      $avisar="<BR>Calificación registrada<BR>";
		     }

# hacemos la llamada a MySQL mediante la función mysql_query
# y le decimos que UPDATE (modifique) la tabla
# y que lo haga (SET) en el campo Puntos 
# poniendo el valor que en este caso $Calificacion
# si el DNI existe en la base de datos actualizará el valor
# y si no existe no pasa nada... ya tenemos el mensaje de error
# que nos aparecerá en la página formulario
 
$resultado2=mysqli_query($c,"UPDATE $tabla SET Puntos=$Calificacion WHERE (DNI=$Penitente)");

#colocamos la opcion de mensaje de error por si se produce alguna incidencia

if (mysqli_errno($c)==0){echo " Registro actualizado"; 
             }else{ 
        if (mysqli_errno($c)==1062){echo "<h2>No ha podido añadirse el registro<br>Ya existe un campo con este DNI</h2>"; 
            }else{  
            $numerror=mysqli_errno($c); 
            $descrerror=mysqli_error($c); 
            echo "Se ha producido un error nº $numerror que corresponde a: $descrerror  <br>"; 
        } 

}

# cerramos la conexión con la base de datos	
	

mysqli_close($c);

# escribimos un mensaje para que nos avise del final de proceso de actualización

#insertamos el script de Java que nos devolverá al formulario

#####################################################
#fijate como pasamos el valor del mensaje de aviso  #
#####################################################

# para pasar valores a PHP hay la opcion de añadir a la direccion
# URL del script el simbolo de cerrar interrogacion
# seguido del nombre de la variable con la que será transferido
# el signo igual y el valor de la variable
#
# si quieres pasar mas de una variable la sintaxis sería
# http://loquesea.php?variable1=valor1&variable2=valor2&variable3=valor3



?>

<script language='JavaScript'>


<? echo "window.self.location='ejemplo198.php?avisa=$avisar'"?>


</script>








