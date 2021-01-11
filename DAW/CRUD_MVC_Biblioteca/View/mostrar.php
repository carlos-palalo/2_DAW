<?php
//incluye la clase Libro y CrudLibro
require_once('../Model/crud_libro.php');
require_once('../Model/libro.php');
$crud=new CrudLibro();
$libro= new Libro();
//obtiene todos los libros con el método mostrar de la clase crud
$listaLibros=$crud->mostrar();
//var_dump($listaLibros);
echo'
<!DOCTYPE html>
<html>
<head>
	<title>Mostrar Libros</title>
         <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
</head>
<body>
	<table border=1>
		<head>
			<td>Nombre</td>
			<td>Autor</td>
			<td>Edicion</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
		  '; 
                   foreach ($listaLibros as $libro)
                   { echo'
			<tr>
                            <td>'. $libro->getNombre().'</td>
                            <td>'. $libro->getAutor().'</td>
                            <td>'. $libro->getAnio_edicion().'</td>
                            <td><a href="actualizar.php?id='.  $libro->getId().'&accion=a">Actualizar</a> </td>
                            <td><a href="../Controller/administrar_libro.php?id='.  $libro->getId().'&accion=e">Eliminar</a>   </td>
			</tr>';
		  }
                  echo'
		</body>
	</table>
	<a href="inicio.php">Volver</a>
</body>
</html>';

