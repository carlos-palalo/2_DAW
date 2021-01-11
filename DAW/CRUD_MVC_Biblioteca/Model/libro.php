<?php


class Libro{
		private $id;
		private $nombre;
		private $autor;
		private $anio_edicion;

		function __construct(){}

		public function getNombre(){
		return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getAutor(){
			return $this->autor;
		}

		public function setAutor($autor){
			$this->autor = $autor;
		}

		public function getAnio_edicion(){
		return $this->anio_edicion;
		}

		public function setAnio_edicion($anio_edicion){
			$this->anio_edicion = $anio_edicion;
		}
		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}
	}

