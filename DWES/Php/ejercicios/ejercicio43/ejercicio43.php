<?php
$base="carlos";
$conexion=mysqli_connect ("localhost","carlos","carlos");
mysqli_select_db ($conexion,$base);
foreach ($_POST['nom'] as $indice=>$valor){
    $resultado=mysqli_query($conexion,"UPDATE tabla1 SET nombre='$valor'
                            WHERE DNI='$indice' ");
}
foreach ($_POST['ape1'] as $indice=>$valor){
    $resultado=mysqli_query($conexion,"UPDATE tabla1 SET apellido1='$valor'
                            WHERE DNI='$indice' ");
}
foreach ($_POST['ape2'] as $indice=>$valor){
    $resultado=mysqli_query($conexion,"UPDATE tabla1 SET apellido2='$valor'
                            WHERE DNI='$indice' ");
}
foreach ($_POST['fechanac'] as $indice=>$valor){
    $resultado=mysqli_query($conexion,"UPDATE tabla1 SET fecha_naci='$valor'
                            WHERE DNI='$indice' ");
}
foreach ($_POST['repe'] as $indice=>$valor){
    $resultado=mysqli_query($conexion,"UPDATE tabla1 SET repetidor='$valor'
                            WHERE DNI='$indice' ");
}
mysqli_close($conexion);
?>

<script language="JavaScript">
  window.self.location="formejercicio43.php";
</script>


