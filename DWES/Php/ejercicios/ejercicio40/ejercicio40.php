<?php
$base="carlos";
$tabla="tabla1";

$v1=$_POST['p_v1'];
$v2=$_POST['p_v2'];
$v3=$_POST['p_v3'];
$v4=$_POST['p_v4'];
foreach ($_POST['p_v5'] as $valor){
$nacimiento[]=$valor;
}
$v5=$nacimiento[2]."-".$nacimiento[1]."-".$nacimiento[0];
$v6=$_POST['p_v6'];

$c=mysqli_connect("localhost","carlos","carlos");
mysqli_select_db($c,$base);

# AÑADIMOS EL NUEVO REGISTRO

mysqli_query($c,"INSERT $tabla
(DNI,nombre,apellido1,apellido2,fecha_naci,repetidor)
VALUES ('$v1','$v2','$v3','$v4','$v5','$v6')");

if (mysqli_errno($c)==0){
  echo "<h2>Registro AÑADIDO</b></H2>";
}
else{
  if (mysqli_errno($c)==1062){
    echo "<h2>No ha podido añadirse el registro<br>Ya existe un campo con este DNI</h2>";
  }
  else{
    $numerror=mysqli_errno($c);
    $descrerror=mysqli_error($c);
    echo "Se ha producido un error nº $numerror que corresponde a: $descrerror  <br>";
  }
}

# cerramos la conexion

mysqli_close($c);

?>






