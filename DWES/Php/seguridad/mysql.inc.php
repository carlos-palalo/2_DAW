<?php
# estas son las variables anteriores
$mysql_server="localhost";
$mysql_login="carlos";
$mysql_pass="carlos";
# creemos una nueva variable $c sin asignarle ningún valor
# para que pueda recoger el identificador de conexión
# una vez que se haya establecido esta
$c;
# escribamos la función que hace la conexión
# como pretendemos que el valor del identificador
# sea usado fuera de la función, para recuperar su valor
# pasaremos ese valor por referencia anteponiendo & al
# nombre de la variable
function conecta1(&$c){
# para usar las variables anteriores en la funcion
# hemos de definirlas como globales
global $mysql_server, $mysql_login, $mysql_pass;
if($c=mysqli_connect($mysql_server,$mysql_login,$mysql_pass)){
print "<br>Conexión establecida<br>";
}else{
print "<br>No ha podido realizarse la conexión<br>";
# el exit lo incluimos para que deje de ejecutarse
# el script si no se establece la conexión
exit();
}
}
# esta función asignará a $c el valor del identificador
# repetimos la misma función con otro nombre
# ahora quitaremos el mensaje de conexión establecida
# consideraremos que si no hay mensaje se ha establecido
# asi quedará limpia nuestra página
function conecta2(&$c){
global $mysql_server, $mysql_login, $mysql_pass;
if($c=mysqli_connect($mysql_server,$mysql_login,$mysql_pass)){
}else{
print "<br>No ha podido realizarse la conexión<br>";
exit();
}
}
?>