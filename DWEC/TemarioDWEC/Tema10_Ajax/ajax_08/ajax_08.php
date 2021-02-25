<?php
	$servername = "localhost";
	$dbName = "dwec_biblioteca";
	$username = "carlos";
	$password = "carlos";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbName;charset=utf8", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$cantidad = 0; $operacion = '';
		$codigo = (int) $_GET['codigo'];
		$provincia = $_GET['provincia'];
		$temperatura = (int) $_GET['temperatura'];
		$estado = (int) $_GET['estado'];

		$sentenciaContar = $conn->prepare("SELECT count(*) FROM temperaturas WHERE codigo = :codigo");
		$sentenciaContar->bindParam(':codigo', $codigo);
		$sentenciaContar->execute();
		$cantidad = $sentenciaContar->fetchColumn();


		if($cantidad==0) {
			$sentencia = $conn->prepare("INSERT INTO temperaturas (codigo,provincia,temperatura,estado) VALUES (:codigo, :provincia, :temperatura, :estado)");
			$operacion = 'Inserción realizada';
		} else {
			$sentencia = $conn->prepare("UPDATE temperaturas SET provincia=:provincia , temperatura=:temperatura , estado=:estado WHERE codigo=:codigo");
			$operacion = 'Actualización realizada';
		}
		
		$sentencia->bindParam(':codigo', $codigo);
		$sentencia->bindParam(':provincia', $provincia);
		$sentencia->bindParam(':temperatura', $temperatura);
		$sentencia->bindParam(':estado', $estado);

		$sentencia->execute();
		echo $operacion;
	} catch(PDOException $e) {
		echo "Falló la conexión: " . $e->getMessage();
	}
?>