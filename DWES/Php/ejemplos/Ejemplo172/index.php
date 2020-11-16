<html>
<head>
<title>Formulario para añadir datos a la tabla demo42</title>
</head>
<body>
<center><h2>Tabla «demo42»<br>Formulario de altas<h2></center>

<!-- creamos un formulario en el que recogeremos los valores
     a añadir a la base de datos demo4
     utilizaremos los mismos nombres de variables que en aquel
     - por razones de comodidad- anteponiendoles p_ //-->

<form name="altas" method="POST" action="ejemplo173.php">
<table bgcolor="#E9FFFF" align=center border=2>

<td align="right">Escribe tu D.N.I.: </td>
<td align="left"> <input type="text" name="p_v1" value="" size=8></td><tr>
<td align="right">Nombre....: </td>
<td align="left"> <input type="text" name="p_v2" value="" size=20></td><tr>
<td align="right">Primer apellido....: </td>
<td align="left"> <input type="text" name="p_v3" value="" size=15></td><tr>
<td align="right">Segundo apellido...: </td>
<td align="left"> <input type="text" name="p_v4" value="" size=15></td><tr>
<td align="right">Fecha de nacimiento: </td>

<!-- para evitar fechas de nacimiento incorrectas
     utilizamos la opción select para asignarles valores
     y recogemos e un array de indices 0, 1 y 2
     los valores respectivos de año, mes y día
     con el ánimo de mantener la misma secuencia
     con la que MySQL registrará estos datos //-->


<td align="left"> <select name="p_v5[2]">
<!-- insertamos un script PHP que nos genere autmaticamente las options con valores entre
 1 y 31 (se trata del campo dias //-->

<?php for ($i=1;$i<32;$i++){
echo "<option>$i</option>";
} 
?>
</select> de 

<!-- repetimos un bucle como el anterior las options de mes
esta vez entre 1 y 12 (se trata del campo dias //-->

<select name="p_v5[1]">
<?php for ($i=1;$i<13;$i++){
echo "<option>$i</option>";
} 
?>
</select> de

<!-- ahora el bucle para años, tratándose de fechas de nacimiento
pongámoslas en el intervalo 1935 - 2003 //-->

<select name="p_v5[0]">
<?php for ($i=1935;$i<2029;$i++){
echo "<option>$i</option>";
} 
?>

<!-- el sexo lo recogemos mediante una una opcion
     tipo radio y le asignamos cheked al valor M
     para obligar a que tenga el mismo valor
     El unico detalle relevante es que el name ha de ser el mismo
     en ambos botones de opcion //-->

</select></td><tr>
<td align="right">Sexo...:</td>
<td align="left"> <input type="radio" name="p_v6" value="M" checked > Masculino <input type="radio" name="p_v6" value="F" > Femenino </td><tr>
<td align="right">Hora de nacimiento: </td>


<!-- para insertar la hora de nacimiento utilizamos la misma
     estrategia que para la fecha de nacimiento
     utilizando un array como variable y asignando
     los indices 0, 1 y 2 para
     horas, minutos y segundos respectivamente //-->

<td align="left"> <select name="p_v7[0]">
<?php for ($i=0;$i<24;$i++){
echo "<option>$i</option>";
} 
?>

</select> h  
<select name="p_v7[1]">
<?php for ($i=0;$i<60;$i++){
echo "<option>$i</option>";
} 
?>
</select> m
<select name="p_v7[2]">
<?php for ($i=0;$i<60;$i++){
echo "<option>$i</option>";
} 
?>
</select> s</td><tr>

<!-- volvemos a utilizar la opción radio para asignar valor 1 al caso de fumador
     valor 0 en el caso de no fumador y recogemos el resultado
     en la variable p_v8 //-->

<td align="right">Fumador:</td>
<td align="left"> <input type="radio" name="p_v8" value="1" checked > Si <input type="radio" name="p_v8" value="0" > No </td><tr>

<!-- la opción idiomas la activamos mediante un SELECT MULTIPLE
    	que permite visualizar las OPCIONES DE IDIOMA
        POR EL MISMO ORDEN EN QUE FUERON DEFINIDAS
        EN LA OPCION SET DE LA BASE DE DATOS
        A cada una de las opciones les asignamos como valor
        una POTENCIA DE DOS empezando por
        2 elevado 0, 2 elevado 1, 2 elevado 2, etc.
	la finalidad de esta estrategia es permitir
        que en el formulario de ALTAS
        se puedan sumar estos valores y que esa suma
        se el valor decimal equivalente al valor binario
        de las opciones seleccionadas 
        El array p_v9 recogerá con indices correlativos
        a partir de 0, unicamente los valores de 
        AQUELLAS OPCIONES QUE HAN SIDO SELECCIONADAS //-->
  


<td align="right">Habla:<br>
(<i>Si habla varios seleccionarlos<br>
pulsando con el mouse encima de <br>
cada uno de ellos con la tecla<br>
<b>Ctrl</b> presionada</i>)</td>
<td align="left"> <SELECT MULTIPLE name=p_v9[] SIZE=6>
<option  value=1>Castellano</option>
<option  value=2>Francés</option>
<option value=4>Inglés</option>
<option  value=8>Alemán</option>
<option  value=16>Búlgaro</option>
<option  value=32>Chino</option>
</select>
</td><tr>

<!--colocamos los botones de enviar y borrar //-->


<td align=center><input type=submit value="Enviar"></td>
<td align=center><input type=reset value="Borrar"></td>
</form>
</table>
</body>
</html>


