<?php
	$servername = "localhost";
	$dbName = "dwec_biblioteca";
	$username = "carlos";
	$password = "carlos";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbName;charset=utf8", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		if(isset($_GET["codigo"])) {
			$codigo = $_GET["codigo"];
	
			$sentencia = $conn->prepare("DELETE FROM libros WHERE Id = :codigo");
			$sentencia->bindParam(':codigo', $codigo);
			$sentencia->execute();
			echo "LIBRO ELIMINADO";
		}

	} catch(PDOException $e) {
		echo "Fallo la conexión: " . $e->getMessage();
	}
?>