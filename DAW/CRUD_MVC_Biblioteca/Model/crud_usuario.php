<?php
// incluye la clase Db
require_once('Conexion.php');
	
    class CrudUsuario{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo libro
		
		// método para mostrar todos los libros
		public function buscar_usuario($usuario){
			try{	
				 $conexion = Conexion::getInstance();
				
				 $sql="select * from usuarios_login where usuario=? and pass=?";
				 $listado=$conexion->prepare($sql);
				 $listado->execute(array($usuario->getUsuario(),$usuario->getPass()));
				 //$filas es un array asociativo con los registros de la consulta
				 $filas=$listado->fetchAll();
				 if (count($filas)>0)
				 {
					  $_SESSION['logueado']=true;
					 
				}
				else{
					$_SESSION['logueado']=false;
				}
				
				
			}catch (PDOException $e) {
				echo "Fallo en el acceso a la BD" . $e->getMessage();
				
			}  
		}//mostrar
	}//clase

		
	


