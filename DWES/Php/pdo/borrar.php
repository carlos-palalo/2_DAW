<?php
require 'conexion.php';
$db = new PDO('mysql:host=' . $servidor . ';dbname=' . $bd, $usuario, $contrasenia);

$id = 11;
$borra = $db->prepare('DELETE FROM items WHERE id_item = :id');
$borra->bindParam(':id', $id);

$borra->execute();

$consulta = $db->prepare('SELECT * FROM items');
$consulta->execute();
?>
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