<?php
//incluye la clase usuario y CrudUsuario
session_start();
require_once('../Model/crud_usuario.php');
require_once('../Model/usuario.php');

$crud_usuario= new CrudUsuario();
$usuario= new Usuario();

	
	if (isset($_POST['btn_login'])) {
             
		$usuario->setUsuario($_POST['usuario']);
		//ojo codifico el password al algoritmo sha512
		$usuario->setPass(hash("sha512", $_POST['pass']));
		
		//llama a la función buscar_usuario definida en el crud
		$crud_usuario->buscar_usuario($usuario);
		if ($_SESSION['logueado']==true)
		   header('Location: ../View/inicio.php');
		   else{
			header('Location: ../index.php');
		   }

	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}//if 

	


