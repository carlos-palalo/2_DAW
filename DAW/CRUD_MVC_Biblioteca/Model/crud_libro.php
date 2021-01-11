<?php
// incluye la clase Db
require_once('Conexion.php');
	
        class CrudLibro{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($libro){
			
			$conexion = Conexion::getInstance();
			$insert=$conexion->prepare('INSERT INTO libros values(NULL,:nombre,:autor,:anio_edicion)');
			$insert->bindValue('nombre',$libro->getNombre());
			$insert->bindValue('autor',$libro->getAutor());
			$insert->bindValue('anio_edicion',$libro->getAnio_edicion());
			$insert->execute();

		}

		// método para mostrar todos los libros
		public function mostrar(){
			 $conexion = Conexion::getInstance();
			$listaLibros=[];
			$select=$conexion->query('SELECT * FROM libros');
			foreach($select->fetchAll() as $libro){
				$myLibro= new Libro();
				$myLibro->setId($libro['id']);
				$myLibro->setNombre($libro['nombre']);
				$myLibro->setAutor($libro['autor']);
				$myLibro->setAnio_edicion($libro['anio_edicion']);
				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}

		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			 $conexion = Conexion::getInstance();
			$eliminar=$conexion->prepare('DELETE FROM libros WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerLibro($id){
			$conexion = Conexion::getInstance();
			$select=$conexion->prepare('SELECT * FROM libros WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$libro=$select->fetch();
			$myLibro= new Libro();
			$myLibro->setId($libro['id']);
			$myLibro->setNombre($libro['nombre']);
			$myLibro->setAutor($libro['autor']);
			$myLibro->setAnio_edicion($libro['anio_edicion']);
			return $myLibro;
		}

		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($libro){
			$conexion = Conexion::getInstance();
			$actualizar=$conexion->prepare('UPDATE libros SET nombre=:nombre, autor=:autor,anio_edicion=:anio  WHERE ID=:id');
			$actualizar->bindValue('id',$libro->getId());
			$actualizar->bindValue('nombre',$libro->getNombre());
			$actualizar->bindValue('autor',$libro->getAutor());
			$actualizar->bindValue('anio',$libro->getAnio_edicion());
			$actualizar->execute();
		}
	}


