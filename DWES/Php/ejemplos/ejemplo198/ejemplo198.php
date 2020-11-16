<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Formulario de modificaciones</title></head>
<body>
<h2><center>MODIFICACION DE PUNTUACIONES<BR> DE LA PRUEBA Nº 2

<!-- Caundo la variable $avisa recoge el mensaje creado en
     el script que actualiza la base de datos, la imprimimos
     con esta etiqueta PHP -->

<?php echo $_GET['avisa']; ?>

</H2></CENTER>
<FORM name="modificar" method="GET" action="ejemplo199.php">

<table align=center border=2>
<td>Escriba el DNI de la persona a calificar..:</td>
<td><input type="text" name="Penitente" value=""></td><tr>
<td>Escriba aquí la calificación..:</td>
<td><input type="text" name="Calificacion" value=""></td><tr>
<td align=center><input type="submit" value="Calificar"></td>
<td align=center><input type="reset" value="Borrar"></td>
</form>
</table>
<br><BR>
<H3><CENTER>Tenga en cuenta que la calificación requiere<br>un número de DNI existente en la base de datos</center></h3>

</body>
</html>
