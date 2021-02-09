<?php
$servername = "localhost";
$dbName = "dwec_biblioteca";
$username = "carlos";
$password = "carlos";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET["titulo"])) {
        $titulo = $_GET["titulo"] . '%';
        $resultados = $conn->query("SELECT titulo FROM libros WHERE titulo LIKE '" . $titulo . "'");
        $fila = $resultados->fetch(PDO::FETCH_ASSOC);
        echo $fila["titulo"];
    }
} catch (PDOException $e) {
    echo "Fallo la conexión: " . $e->getMessage();
}
