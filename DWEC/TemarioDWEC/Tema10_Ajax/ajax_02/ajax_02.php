<?php
	$servername = "localhost:3306";
	$dbName = "dwec_biblioteca";
	$username = "carlos";
	$password = "carlos";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbName;charset=utf8", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		/*$libro = new stdClass();
		$libros = array();*/


		foreach($conn->query("SELECT * FROM libros ") as $fila) {
			echo $fila["titulo"]."<br />";
		}

	} catch(PDOException $e) {
		echo "Fallo la conexión: " . $e->getMessage();
	}
?>