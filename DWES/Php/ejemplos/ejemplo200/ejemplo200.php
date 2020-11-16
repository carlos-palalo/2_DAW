<html>
<head>
<title>Formulario para añadir datos a la tabla demo4</title>
</head>
<body>

<?php 

# definimos una variable con el NOMBRE DE LA BASE DE DATOS

$base="joseluis";

# establecemos la conexión con el servidor

$conexion=mysqli_connect ("localhost","joseluis","joseluis",$base);

if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

#Seleccionamos la BASE DE DATOS en la que PRETENDEMOS TRABAJAR

mysqli_select_db ($conexion,$base);

#creamos una consulta de las bases de datos demo4 y demodat2
# esta segunda es la tabla de puntuaciones de la segunda prueba
# seleccionamos los campos DNI de ambas tablas
# y nombre y apellidos de la primera
# establecemos como condicion la IGUALDAD DE LOS DNI en ambas BASES

$resultado=mysqli_query($conexion,"SELECT demo42.DNI,demo42.Nombre,demo42.Apellido1,demo42.Apellido2,demodat422.Puntos FROM demo42,demodat422 WHERE (demo42.DNI=demodat422.DNI) ");

if($resultado === false) {
    die("Fallo en la consulta a la base de datos");
} else {
    // use mysqli_fetch_row() here.

# presentamos la salida en forma de tabla HTML

# estos son los encabezados


echo "<table align=center border=2 bgcolor='#F0FFFF'>";
	echo "<td colspan=5 align=center>Para modificar escribe en la casilla correspondiente</td><tr>";
        echo "<td colspan=4 align=center>Datos del aspirante</td>";
	echo "<td align=center>Puntuación</td><tr>";


#escribimos la etiqueta de apertura de un formulario como method=post
# como action ponemos la direccion de la página que realizará las actualizaciones
# en este caso sera ejemplo201.php

	echo "<form name='modificar' method=\"POST\" action='ejemplo201.php'>";

while ($salida = mysqli_fetch_array($resultado,MYSQLI_NUM)){

	# escribimos un bucle que nos lea desde el indice 0 hasta el indice 6
        # de la matriz de salida ya que los indices 0,1,2,3,4...
        # se corresponden con el número de orden tal como fueron establecidos
        # los campos en la opción SELECT: 0 es el indice del primero
        # 1 el de segundo, 2 el del tercero, etc. etc.

       for ($i=0;$i<5;$i++){

# establecemos un condicion que escriba una tabla normal SALVO
# cuando $i=4 que es el valor actual de la puntuación
# cuando eso ocurre pedimos que escriba en la celda de la tabla
# un campo de formulario TIPO TEXTO cuyo NOMBRE SEA UNA MATRIZ
# aqui la hemos llamado ident 
# cuyos indices sean los DNI de los personajes de la tabla
# recuerda que la $Salida[0] contiene siempre el primer elemento
# definido en la opcion SELECT y que en este caso es el DNI
# PEDIMOS QUE ESE CAMPO DEL FORM tenga por valor EL VALOR ACTUAL DE LA PUNTUACION
# existente en la base de DATOS


        if($i!=4){       

	echo "<td>",$salida[$i],"</td>";
        }else{
        echo "<td><input type=text size=8 name=ident[$salida[0]] value=$salida[4]></td><tr>";
	}

        #cerramos el bucle for

		}   

	
# CERRAMOS EL BUCLE WHILE

}


}
# cerramos la conexión... y listo...

 		mysqli_close($conexion)
 


# SALIMOS DE PHP y ponemos los botones de borrar /enviar desde HTML

?>

<td colspan=5 align=center><br><input type=submit value='Modificar'>&nbsp;<input type=reset value='Borrar'>

<!-- CERRAMOS EL FORMULARIO Y LA TABLA -->

</form></table>

<!-- LOS CAMPOS DEL FORMULARIO PUEDEN MODIFICARSE DESDE EL TECLADO
     Y RECOGERAN LAS MODIFICACIONES EN EL ARRAY iden que como recuerdas
     TENIA POR INDICE EL Nº DE DNI
     AL PULSAR EN ENVIAR ESE ARRAY ES PASADO A ejemplo201.php
     QUE REALIZA LA ACTUALIZACION DE LA TABLA -->






</body>
</html>




