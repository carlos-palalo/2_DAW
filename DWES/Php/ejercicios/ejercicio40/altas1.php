<html>
<head>
<title>Formulario para añadir datos a la tabla tabla1</title>
</head>
<body>
<center><h2>Tabla «tabla1»<br>de la bbdd "joseluis"<br>
            Formulario de altas<h2></center>

<!-- creamos un formulario en el que recogeremos los valores
     a añadir a la base de datos practicas
     utilizaremos los mismos nombres de variables que en aquel
     - por razones de comodidad- anteponiendoles p_ //-->

<form name="altas1" method="POST" action="ejercicio40.php">
<table bgcolor="#E9FFFF" align=center border=2>

<td align="right">Escribe tu D.N.I.: </td>
<td align="left"> <input type="text" name="p_v1" value="" size=10></td><tr>
<td align="right">Nombre....: </td>
<td align="left"> <input type="text" name="p_v2" value="" size=15></td><tr>
<td align="right">Primer apellido....: </td>
<td align="left"> <input type="text" name="p_v3" value="" size=10></td><tr>
<td align="right">Segundo apellido...: </td>
<td align="left"> <input type="text" name="p_v4" value="" size=10></td><tr>
<td align="right">Fecha de nacimiento: </td>

<!-- para evitar fechas de nacimiento incorrectas
     utilizamos la opción select para asignarles valores
     y recogemos e un array de indices 0, 1 y 2
     los valores respectivos de año, mes y día
     con el ánimo de mantener la misma secuencia
     con la que MySQL registrará estos datos //-->


<td align="left"> <select name="p_v5[2]">
<!-- insertamos un script PHP que nos genere autmaticamente las options con valores entre
1 y 31 (se trata del campo dias //-->

<?php for ($i=1;$i<32;$i++){
        echo "<option>$i</option>";
}
?>
</select> de

<!-- repetimos un bucle como el anterior las options de mes
esta vez entre 1 y 12 (se trata del campo mes //-->

<select name="p_v5[1]">
<?php for ($i=1;$i<13;$i++){
        echo "<option>$i</option>";
}
?>
</select> de

<!-- ahora el bucle para años, tratándose de fechas de nacimiento
pongámoslas en el intervalo 1935 - 2003 //-->

<select name="p_v5[0]">
<?php for ($i=1935;$i<2018;$i++){
    echo "<option>$i</option>";
}
?>

<!-- el repetidor lo recogemos mediante una opcion
     tipo radio. El unico detalle relevante es que el name
     ha de ser el mismo en ambos botones de opcion //-->

</select></td><tr>
<td align="right">Repetidor:</td>
<td align="left"> <input type="radio" name="p_v6" value="Si" > Repite
<input type="radio" name="p_v6" value="No" > No repite </td><tr>

<!--colocamos los botones de enviar y borrar //-->

<td align=center><input type=submit value="Enviar"></td>
<td align=center><input type=reset value="Borrar"></td>
</form>
</table>
</body>
</html>





