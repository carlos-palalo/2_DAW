<?php
# recogemos en una variable el nombre de BASE DE DATOS

$base="joseluis";

# recogemos en una variable el nombre de la TABLA

$tabla="demo42";

# recoger y adaptar las variables pasadas desde el formulario 
# ni el DNI ni los nombres y apellidos necesitan ninguna modificacion
# por eso los pasamos a la variable intermedia directamente

/* estas variables intermedias podrían evitarse. El hecho de usarlas
   obedece unicamente a un intento de mayor claridad en la interpretación
   de este codigo fuente */
  

$v1=$_POST['p_v1'];
$v2=$_POST['p_v2'];
$v3=$_POST['p_v3'];
$v4=$_POST['p_v4'];



/* Leemos el array pv__5 y lo recogemos
   en un array escalar de indices autonumericos
   (nacimiento) teniendo en cuenta que el orde sería
   dia, mes y año, ya que así lo hemos insertado
   en los indices del formulario */

foreach ($_POST['p_v5'] as $valor){
$nacimiento[]=$valor;
}

/* creamos la variable fecha de nacimiento
   ENCADENANDO el array anterior
   FIJATE QUE LO HACEMOS EN ORDEN INVERSO
   PORQUE MySQL REQUIERE FECHAS CON FORMATO
   AÑO-MES-DIA  (AAAA-MM-DD) */


$v5=$nacimiento[2]."-".$nacimiento[1]."-".$nacimiento[0];

# la variable Sexo la recogemos sin modificaciones
# ya que desde el formulario solo recibimos
# valor M ó valor F

$v6=$_POST['p_v6'];

/* Leemos el array pv__5 y lo recogemos
   en un array escalar (hora) de indices autonumericos
   teniendo en cuenta que el orde sería
   dia, mes y año, ya que así lo hemos insertado
   en los indices del formulario */


foreach ($_POST['p_v7'] as $valor){
$hora[]=$valor;
}

/* encadenamos los elementos del array hora en formato válido
   MySQL, es decir: hora:minutos:segundos (hh:mm:ss) */

$v7=$hora[0].":".$hora[1].":".$hora[2];


# la variable $p_v8 puede contener valores
# 0 (no fumador) ó 1 (si fumador)
# con este bucle asignamos NULL para el primero de los casos
# o CADENA VACIA para el segundo
# ¡¡Atención......
# fijate como pasamos la cadena vacia
# y fijate que en el INSERT no ponemos la variable $v8 entre comillas
# es la excepción para el tipo de variable CHAR(O)
# LA UNICA QUE NO PASAMOS ENTRECOMILLADA

if ($_POST['p_v8']==0) {
 $v8='"\n"';
 }else{
 $v8='""';
}

# el truco de asignar en el formulario valores 1,2,4,8,16,32 a las opciones de idioma
# nos permite sumarlos aquí para obtener el valor conjunto
# aqui se suman todos los valores de la matriz pasada desde el formulario
$v9=0;
foreach($_POST['p_v9'] as $valor) {
$v9+=$valor;
};

# establecemos la conexion con el servidor

 $c=mysqli_connect("localhost","joseluis","joseluis");

#asiganamos la conexión a una base de datos determinada

mysqli_select_db($c,$base); 

# AÑADIMOS EL NUEVO REGISTRO
/* CUIDADO.....
   SOLO LAS VARIABLES NUMERICAS VAN SIN COMILLAS AL INSERTAR LOS VALOES
   OBSERVA EN VALUES QUE LAS VARIABLES NO NUMERICAS SE INSERTAN
   ENTRE COMILLAS..... */
 
 mysqli_query($c,"INSERT $tabla (DNI,Nombre,Apellido1,Apellido2, Nacimiento,Sexo,Hora,Fumador,Idiomas) VALUES ('$v1','$v2','$v3','$v4','$v5','$v6','$v7',$v8,'$v9')"); 

#comprobamos el resultado de la insercion
# el error CERO significa NO ERROR
# el error 1062 significa Clave duplicada
# en otros errores forzamos a que nos ponga el número de error
# y el significado de ese error (aunque sea en ingles)....


if (mysqli_errno($c)==0){echo "<h2>Registro AÑADIDO</b></H2>";
             }else{
		if (mysqli_errno($c)==1062){echo "<h2>No ha podido añadirse el registro<br>Ya existe un campo con este DNI</h2>";
			}else{ 
			$numerror=mysqli_errno($c);
			$descrerror=mysqli_error($c);
			echo "Se ha producido un error nº $numerror que corresponde a: $descrerror  <br>";
		}

}

# cerramos la conexion

 mysqli_close($c); 
 
 ?>
