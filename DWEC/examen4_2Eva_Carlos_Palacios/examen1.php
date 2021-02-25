<?php
	$servername = "localhost";
	$dbName = "dwec_biblioteca";
	$username = "carlos";
	$password = "carlos";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbName;charset=utf8", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		if(isset($_GET["preciomin"])) {
			$preciomin = $_GET["preciomin"];
		}
		if(isset($_GET["preciomax"])) {
			$preciomax = $_GET["preciomax"];
		}

		$sentencia = $conn->prepare("SELECT * FROM libros where precio >= :preciomin and precio <= :preciomax");

		$sentencia->bindParam(':preciomin', $preciomin);
		$sentencia->bindParam(':preciomax', $preciomax);
		$sentencia->execute();

		$listaTitulos = array();
		while ($fila = $sentencia->fetch(PDO::FETCH_ASSOC)) {
			$libro = new stdClass();

			$libro->isbn = $fila["Id"];
			$libro->titulo = $fila["titulo"];
			$libro->autor = $fila["autor"];
			$libro->editorial = $fila["editorial"];
			$libro->paginas = $fila["paginas"];
			$libro->precio = $fila["precio"];

			$listaTitulos[] = $libro;
		}

		echo json_encode($listaTitulos);
	} catch(PDOException $e) {
		echo "Fallo la conexión: " . $e->getMessage();
	}
?>