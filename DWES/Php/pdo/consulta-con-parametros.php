<?php
require 'conexion.php';
$db = new PDO('mysql:host=' . $servidor . ';dbname=' . $bd, $usuario, $contrasenia);
$consulta = $db->prepare('SELECT * FROM items WHERE id_item = ? OR id_item = ?');
$consulta->execute(array(2, 4));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>PDO</title>
</head>

<body>
	<table>
		<tr>
			<th>ID</td>
			<th>Item</td>
		</tr>
		<?php
		while ($fila = $consulta->fetch(PDO::FETCH_OBJ)) {
		?>
			<tr>
				<td><?php echo $fila->id_item ?></td>
				<td><?php echo $fila->item ?></td>
			</tr>
		<?php
		}
		?>
	</table>
	<a href="index.php">Men&uacute;</a>
	<?php
	$db = null;
	?>
</body>

</html>