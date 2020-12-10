<?php
$servidor = 'localhost';
$db = 'proyectotiendaropa_carlosp';
$usuario = 'carlos';
$contrasenia = 'carlos';
$bd = new PDO('mysql:host=' . $servidor . ';dbname=' . $db, $usuario, $contrasenia);