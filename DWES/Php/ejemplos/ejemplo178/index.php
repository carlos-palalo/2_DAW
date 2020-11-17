<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        # recogemos en una variable el nombre de BASE DE DATOS

$base="carlos";

# recogemos en una variable el nombre de la TABLA

$tabla="demo42";


# establecemos la conexion con el servidor

$c=mysqli_connect("localhost","carlos","carlos");

#asiganamos la conexión a una base de datos determinada

mysqli_select_db($c,$base);

# establecemos el criterio de SELECCION
# en este caso los campos Contador, Nombre, Apellido1, Apellido2 unicamente
# añadimos un criterio de seleccion WHERE
# que como puedes ver es simple en este caso (que el Sexo sea masculino)
# el resultado de la consulta será UNA LISTA CON TODOS LOS VARONES DE LA TABLA

$resultado= mysqli_query($c,"SELECT Nombre, Apellido1, Apellido2 FROM $tabla WHERE (Sexo='M') ");



# CREAMOS UNA CABECERA DE UNA TABLA (codigo HTML)

echo "<table align=center border=2>";

# establecemos un bucle que recoge en un array
# cada una de las LINEAS DEL RESULTADO DE LA CONSULTA
# utilizamos en esta ocasión «mysql_fetch_row»
# en vez de «mysql_fetch_array» para EVITAR DUPLICADOS
# recuerda que esta ultima función devuelve un array escalar
# y otro asociativo con los resultados

while ($registro = mysqli_fetch_row($resultado)){
       
       # insertamos un salto de línea en la tabla HTML

       echo "<tr>";

       # establecemos el bucle de lectura del ARRAY
       # con los resultados de cada LINEA
       # y encerramos cada valor en etiquetas <td></td>
       # para que aparezcan en celdas distintas de la tabla

       foreach($registro  as $clave){
       echo "<td>",$clave,"</td>";
 }
}
echo "</table>";


# cerramos la conexion

 mysqli_close($c); 
        ?>
    </body>
</html>
