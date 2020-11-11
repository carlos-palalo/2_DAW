<?php
/* nos conectamos con el servidor
recogiendo en $c el identificador de conexión */
$c = mysqli_connect("localhost", "carlos", "carlos") or die("Imposible conectar");
# seleccionamos una base de datos existente
# de lo contrario nos daría un error
# pondremos como nombre ejemplos nuestra base de datos
# creada en la página anterior y usaremos $c
# importante no olvidarlo
mysqli_select_db($c, "carlos");
/* ahora ya estamos en condiciones de crear la tabla
podríamos escribir ya la instrucción mysql_query y meter
detro la sentencia MySQL pero, por razones de comodidad
crearemos antes una variable que recoja toda la sentencia
y será luego cuando la ejecutemos.
Definiremos una varable llamada $crear e iremos añadiendo cosas */
# la primera parte de la instrucción es esta (espacio final incluido
$crear = "CREATE TABLE IF NOT EXISTS ";
# añadiremos el nombre de la tabla que será ejemplo1
# fijate en el punto (concatenador de cadenas) que permite
# ir añadiendo a la cadena anterior
$crear .= "ejemplo1 ";
#ahora pongamos el paréntesis (con un espacio delante)
#aunque el espacio también podría detrás de ejemplo1
$crear .= "( ";
# insertemos el primer campo y llamemoslo num1
# hagamoslo de tipo TINYINT sin otras especificamos
# sabiendo que solo permitira valores numéricos
# comprendidos entre -128 y 127
$crear .= "num1 TINYINT , ";
# LOS CAMPOS SE SEPARAN CON COMAS por eso
# la hemos incluido al final de la instrucción anterior
# ahora num2 del mismo tipo con dimensión 3 y el flag UNSIGNED
# Y ZEROFILL que: cambiará los límites de valores
# al intervalo 0 - 255, y rellenará con ceros por la izquierda
# en el caso de que el número de cifras significativas
# sea menor de 3.
# Fijate que los flags van separado unicamente por espacios
$crear .= "num2 TINYINT (3) UNSIGNED ZEROFILL, ";
# en num3 identico al anterior añadiremos un valor por defecto
# de manera que cuando se añadan registros a la tabla
# se escriba automaticamente ese valor 13 en el caso
# de que no le asignemos ninguno a ese campo
# por ser numérico 13 no va entre comillas
$crear .= "num3 TINYINT (7) UNSIGNED ZEROFILL DEFAULT 13, ";
# ahora un número decimal num4 tipo REAL con 8 digitos en total
# de los cuales tres serán decimales y también rellenaremos con ceros
# Pondremos como valor por defecto 3.14
$crear .= "num4 REAL (8,3) ZEROFILL DEFAULT 3.14, ";
# añadamos una fecha
$crear .= "fecha DATE, ";
/* una cadena con un limite de 32 carácter con BINARY
para que diferencie Pepe de PEPE */
$crear .= "cadena VARCHAR(32) BINARY, ";
/* un ultimo campo –opcion– del tipo ENUM que solo admita
como valores SI, NO, QUIZA
fijate en las comillas y en el parentesis
¡¡cuidado...!! aqui no ponemos coma al final
es el último campo que vamos a insertar y no necesita
ser separado. Si la pones dará un ERROR */
$crear .= "opcion ENUM('Si','No','Quiza') ";
# solo nos falta añadir el paréntesis conteniendo toda la instrucción
$crear .= ")";
/* tenemos completa la sentencia MYSQL
solo falta ejecutarla mediante mysql_query
ya que la conexión está abierta
y la base de datos ya está seleccionada */
/* pongamos un condicional de comprobación */
if (mysqli_query($c,$crear)) {
    print "Se ha creado la base de datos<br>";
    print "La sentencia MySQL podríamos haberla escrito asi:<br>";
    print "mysql_query(" . "\"" . $crear . "\");";
} else {
    print "Se ha producido un error al crear la tabla";
}
