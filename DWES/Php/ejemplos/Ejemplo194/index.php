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

$base="joseluis";

# recogemos en una variable el nombre de la TABLA

$tabla="demo42";


# establecemos la conexion con el servidor

$c=mysqli_connect("localhost","joseluis","joseluis");

#asiganamos la conexión a una base de datos determinada

mysqli_select_db($c,$base);

# establecemos el criterio de SELECCION
# que en este caso es la aplicacion de las funciones estadisticas
# al campo contador
# dado que agruparemos por sexo, vamos insertar tambien el campo SEXO en la opcion
# SELECT para poder escribir su valor en los resultados correspondientes
# y añadiremos a la sentencia GROUP BY Sexo


$resultado= mysqli_query($c,"SELECT MAX(Contador), MIN(Contador), SUM(Contador), COUNT(Contador), AVG(Contador), STDDEV(Contador), Sexo FROM $tabla  GROUP BY Sexo ");



# CREAMOS UNA CABECERA DE UNA TABLA (codigo HTML)

echo "<table align=center border=2><tr>";

# escribimos la cabeceras de la tabla
# para poder identificar los resultados
# son los nombres de las funciones aplicadas
# escritas por el mismo ORDEN
# añadiremos una cabecera más a la tabla (al final) para la columna
# que recogerá el valor de Sexo

echo "<td>Máximo</td><td>Mínimo</td><td>Suma</td><td>Contar</td><td>Media</td><td>Desviación</td><td>Sexo</td>";

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
