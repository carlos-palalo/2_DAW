<?php
	$servername = "localhost";
	$dbName = "dwec_biblioteca";
	$username = "carlos";
	$password = "carlos";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbName;charset=utf8", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		if(isset($_GET["isbn"])) {
			$isbn = $_GET["isbn"];
			foreach($conn->query("SELECT * FROM libros where Id ='" . $isbn . "'") as $fila) {
				echo $fila["Id"]." - ".$fila["titulo"]." - ".$fila["autor"]." - ".$fila["editorial"]." - ".$fila["paginas"]." - ".$fila["precio"];
			}
		}
	} catch(PDOException $e) {
		echo "Fallo la conexión: " . $e->getMessage();
	}
?>