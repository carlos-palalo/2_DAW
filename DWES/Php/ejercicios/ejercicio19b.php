<?php
$num = htmlspecialchars($_REQUEST['num']);
$num = floatval($num);

if ($num > 0) {
    printf("Positivo");
} elseif ($num < 0) {
    printf("Negativo");
} else {
    printf("Cero");
}
?>
<br>
<a href="ejercicio19a.php">Volver</a>