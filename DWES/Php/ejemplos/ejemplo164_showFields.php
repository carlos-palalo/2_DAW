<?php
# asignamos a una variable el nombre de la base de datos
$base = "carlos";
# esta otra recoge el nombre de la tabla
$tabla = "ejemplo1";
# establecemos la conexión con el servidor
$c = mysqli_connect("localhost", "carlos", "carlos");
# seleccionamos la base de datos
mysqli_select_db($c, $base);
#ejecutamos mysql_query llamando a la sentencia
# SHOW FIELDS
$resultado = mysqli_query($c, "SHOW FIELDS from $tabla");
# determinamos el número campos de la tabla
$numero = mysqli_num_rows($resultado);
# Presentamos ese valor númerico
print "La tabla tiene $numero campos<br>";
# ejecutamos los bucles que comentamos al margen
while ($v = mysqli_fetch_row($resultado)) {
    foreach ($v as $valor) {
        echo $valor, "<br>";
    }
}
#####################################################################
# REPETIMOS LA CONSULTA ANTERIOR USANDO AHORA LA #
# función mysql_fecth_array #
#####################################################################
#tenemos que VOLVER a EJECUTAR LA SENTENCIA MySQL
# porque el puntero está AL FINAL de la ultima línea
# de los resultados
$resultado = mysqli_query($c, "SHOW FIELDS from $tabla");
print("<BR> Los resultados con mysql_fech_array<br>");
while ($v = mysqli_fetch_array($resultado)) {
    foreach ($v as $clave => $valor) {
        print("El indice es: " . $clave . " y el valor es: " . $valor . "<br>");
    }
}
################### la tercera posibilidad comentada
####################################################
$resultado = mysqli_query($c, "SHOW FIELDS from $tabla");
# intentaremos explicar este doble bucle con calma
/* En los procesos anteriores a cada paso del bucle
foreach leiamos un array, lo imprimiamos y sustituiamos
ese array por uno nuevo
Ahora trataremos de recoger todos esos resultados en array
para ello usamos un array bidimensional que renueva
el primer indice en cada ciclo del bucle while
de ahi que pongamos el $contador para asignarle
el primer indice
Los segundos indices serán los valores de los indices
del array $v que recogemos de la petición MySQL
pero mysql_fetch_array genera dos indices para
cada uno de los valores, uno numerico y otro asociativo
asi que filtramos y si el indice es numérico
guardamos en el array llamado numerico
y si no lo es guardamos el llamado asociativo
Tendremos separados en dos array ambos resultados
¿Complicado... ? Es cuestión de analizar con calma */
# pongamos el contador a cero para asegurar
# no hay variables anteriores con el mismo nombre
# y valores distintos
$contador = 0;
while ($v = mysqli_fetch_array($resultado)) {
    foreach ($v as $indice1 => $valor1) {
        if (is_int($indice1)) {
            $numerica[$contador][$indice1] = $valor1;
        } else {
            $asociativa[$contador][$indice1] = $valor1;
        }
    }
    $contador++;
}
/* vamos a leer los array resultantes
empecemos por el numerico que al tener
dos indices requiere dos foreach anidados
el valor del primero será un array
que extraemos en el segundo */
foreach ($numerica as $i => $valor) {
    foreach ($valor as $j => $contenido) {
        print("numerico[" . $i . "][" . $j . "]=" . $contenido . "<br>");
    }
}
foreach ($asociativa as $i => $valor) {
    foreach ($valor as $j => $contenido) {
        print("asociativo[" . $i . "][" . $j . "]=" . $contenido . "<br>");
    }
}
# liberamos memoria borrando de ella el resultado
mysqli_free_result($resultado);
# cerramos la conexion con el servidor
mysqli_close($c);
