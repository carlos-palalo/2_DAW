<?php

echo"<!DOCTYPE html>
<html>
<head>
	<title> Ingresar Libro</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
</head>
<header>
Ingresa los datos del Libro
</header>
<form action='../Controller/administrar_libro.php' method='POST'>
	<table>
		<tr>
			<td>Nombre libro:</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
			<td>Autor:</td>
			<td><input type='text' name='autor' ></td>
		</tr>
		<tr>
			<td>Fecha Edición:</td>
			<td><input type='text' name='edicion' ></td>
		</tr>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar' >
	<a href='inicio.php'>Volver</a>
</form>

</html>";

