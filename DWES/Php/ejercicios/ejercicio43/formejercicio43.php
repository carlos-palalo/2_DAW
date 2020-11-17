<html>
<head>
<title>Formulario para modificar datos en la tabla tabla1</title>
</head>
<body>

<?php

# definimos una variable con el NOMBRE DE LA BASE DE DATOS

$base="carlos";

# establecemos la conexión con el servidor

$conexion=mysqli_connect ("localhost","carlos","carlos");

#Seleccionamos la BASE DE DATOS en la que PRETENDEMOS TRABAJAR

mysqli_select_db ($conexion,$base);

#creamos una consulta de la tabla tabla1

$resultado=mysqli_query($conexion,"SELECT tabla1.DNI,tabla1.nombre,tabla1.apellido1,
           tabla1.apellido2, tabla1.fecha_naci, tabla1.repetidor
           FROM tabla1 ");

# presentamos la salida en forma de tabla HTML

# encabezados

echo "<table align=center border=2 bgcolor='#F0FFFF'>";
echo "<td colspan=6 align=center>Para modificar escribe en la casilla correspondiente</td><tr>";
echo "<td colspan=4 align=center>Datos del alumno</td>";
echo "<td align=center>Fecha nac.</td>";
echo "<td align=center>Repetidor</td><tr>";

echo "<form name='modificar' method=\"POST\" action='ejercicio43.php'>";

while($salida = mysqli_fetch_array($resultado)){
  for ($i=0;$i<6;$i++){
   if ($i==0){
     echo "<td>",$salida[$i],"</td>";
   }
   if ($i==1){
     echo "<td><input type=text size=10 name=nom[$salida[0]] value=$salida[$i]></td>";
   }
   if ($i==2){
     echo "<td><input type=text size=10 name=ape1[$salida[0]] value=$salida[$i]></td>";
   }
   if ($i==3){
     echo "<td><input type=text size=10 name=ape2[$salida[0]] value=$salida[$i]></td>";
   }
   if ($i==4){
     echo "<td><input type=text size=10 name=fechanac[$salida[0]] value=$salida[$i]></td>";
   }
   if ($i==5){
     echo "<td><input type=text size=10 name=repe[$salida[0]] value=$salida[$i]></td>";
   }
  }
  echo "<tr>";
}

mysqli_close($conexion)

?>

<td colspan=6 align=center><br><input type=submit value='Modificar'>
&nbsp;<input type=reset value='Borrar'>

</form></table>

</body>
</html>




