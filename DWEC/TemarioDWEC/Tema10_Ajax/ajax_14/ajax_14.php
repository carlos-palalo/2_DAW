<?php
	$servername = "localhost";
	$dbName = "dwec_biblioteca";
	$username = "profesor";
	$password = "profesor";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbName;charset=utf8", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		if(isset($_GET["isbn"])) {
			$isbn = $_GET["isbn"];
			foreach($conn->query("SELECT * FROM libros where Id ='" . $isbn . "'") as $fila) {
				$libro = new stdClass();

				$libro->isbn = $fila["Id"];
				$libro->titulo = $fila["titulo"];
				$libro->autor = $fila["autor"];
				$libro->editorial = $fila["editorial"];
				$libro->paginas = $fila["paginas"];
				$libro->precio = $fila["precio"];
				
				echo json_encode($libro);
			}
		}
	} catch(PDOException $e) {
		echo "Fallo la conexión: " . $e->getMessage();
	}
?>