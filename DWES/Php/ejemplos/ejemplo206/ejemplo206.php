<html>
<head>
<title>Formulario para ELIMINAR REGISTROS de la tabla demo4, demodat1, demodat2 y demodat3</title>
</head>
<body>

<?php 

# definimos una variable con el NOMBRE DE LA BASE DE DATOS

$base="carlos";

# establecemos la conexión con el servidor

$conexion=mysqli_connect ("localhost","carlos","carlos");

#Seleccionamos la BASE DE DATOS en la que PRETENDEMOS TRABAJAR

mysqli_select_db ($conexion,$base);


#creamos una consulta de las bases de datos demo4 y demodat2
# esta segunda es la tabla de puntuaciones de la segunda prueba
# seleccionamos los campos DNI de ambas tablas
# y nombre y apellidos de la primera
# establecemos como condicion la IGUALDAD DE LOS DNI en TODAS LAS BASES





$resultado=mysqli_query($conexion,"SELECT demo42.DNI,demo42.Nombre,demo42.Apellido1, demo42.Apellido2 ,demodat421.Puntos, demodat422.Puntos, demodat423.Puntos FROM demo42, demodat421, demodat422, demodat423 WHERE (demo42.DNI=demodat421.DNI AND demo42.DNI=demodat422.DNI AND demo42.DNI=demodat423.DNI)  ");

# presentamos la salida en forma de tabla HTML

# estos son los encabezados


echo "<table align=center border=2 bgcolor='#F0FFFF'>";
	echo "<tr bgcolor='#ffffff'><td colspan=5 align=center>Para BORRAR marca la casilla correspondiente al registro a eliminar</td><tr bgcolor='#ffffff'>";
        echo "<td align=center>Datos del aspirante</td>";
	echo "<td align=center>Punt 1</td>";
	echo "<td align=center>Punt 2</td>";
	echo "<td align=center>Punt 3</td>";
	echo "<td align=center>Borrar</td><tr>";


#escribimos la etiqueta de apertura de un formulario como method=post
# como action ponemos la direccion de la página que realizará las actualizaciones
# en este caso sera ejemplo207.php

	echo "<form name='modificar' method=post action='ejemplo207.php'>";

while($salida = mysqli_fetch_array($resultado)){

	# escribimos un bucle que nos lea desde el indice 0 hasta el indice 6
        # de la matriz de salida ya que los indices 0,1,2,3,4...
        # se corresponden con el número de orden tal como fueron establecidos
        # los campos en la opción SELECT: 0 es el indice del primero
        # 1 el de segundo, 2 el del tercero, etc. etc.

# empezamos el bucle for en $i=1 porque $i=0 corresponderia al DNI
# y esta vez NO VAMOS A PRESENTAR EN PANTALLA ESE NUMERO
# .... cuestion de estética... unicamente 
#
# los condicionales anidados solo tiene una finalidad estética
# se trata de Nombre y apellidos aparezcan en la misma celda de la tabla
# por eso.. delante de nombre ponemos <td> ($i=1)pero...
# no lo hacemos ni delante de Apellido 1 ni de apellido 2...
# pero ...detrás de Apellido dos tenemos que cerrar la etiqueta </td>
#
# en los demás casos, usamos celdas independientes y por tanto
# ponemos <td> antes del valor y </td> detrás

       for ($i=1;$i<7;$i++){

   	if($i==1) {
		echo "<td>",$salida[$i]," ";
		  }else{
                    if ($i==2) {
                        echo $salida[$i]," ";
                         }else{
			    if ($i==3) {
                                 echo $salida[$i],"</td> ";
				 }else{
			           echo "<td>",$salida[$i],"</td>";
       					}
			       }
                         }
       		}   



# despues de recoger los datos añadimos un campo de formulario
# identificado por un NAME que es una matriz (borra) cuyo indice es el DNI del campo consultado
# al ponerle como VALUE='Si" lo que estamos haciendo es que 
# cuando este "marcada" la casilla ese elemento de la matriz tome valor Si
# cuando "no está esté marcada" tomará valor NULL y por lo tanto
# NO SERÁ ENVIADA POR EL METHOD POST

echo "<td align=center> <input type=checkbox name=borra[$salida[0]] value='Si'></td><tr>";

	
# CERRAMOS EL BUCLE WHILE

}

# cerramos la conexión... y listo...

 		mysqli_close($conexion)
 


# SALIMOS DE PHP y ponemos los botones de borrar /enviar desde HTML

?>

<td colspan=5 align=center><br><input type=submit value='Eliminar registros marcados'>&nbsp;<input type=reset value='Borrar el formulario'>

<!-- CERRAMOS EL FORMULARIO Y LA TABLA -->

</form></table>

<!-- LAS CASILLAS DE VERIFICACION PUEDEN MODIFICARSE DESDE EL TECLADO
     SE PUEDE PASAR DE UNA A OTRA CON EL TABULAR
     Y PARA ACTIVARLAS/DESACTIVARLAS PUEDES HACERLO CON EL RATON
     O TAMBIEN PULSANDO LA BARRA ESPACIADORA
     SI LA PULSAS UNA VEZ, SE ACTIVA, SI VUELVES A PULSARLA SE DESACTIVA

-->






</body>
</html>




