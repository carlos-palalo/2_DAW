<?php
# recogemos en una variable el nombre de BASE DE DATOS 

$base="carlos"; 

# recogemos en una variable el nombre de la TABLA 

$tabla="demo42"; 

#creamos un array con DIEZ NOMBRES 

$nombres=array("Fernando","Generosa","Gonzalo","Servanda","Dorotea","Filiberto","Tiburcio","Lupicinia"); 
$nombres[]="Telesfora";$nombres[]="Ambrosio"; 

#creamos un array con DIEZ PRIMEROS APELLIDOS 

$ape1=array("Alonso","Fernández","Alvarez","Domínguez","García","Rodríguez","Iglesias","Cano"); 
$ape1[]="Barcena";$ape1[]="López"; 

#creamos un array con DIEZ SEGUNDOS APELLIDOS 

$ape2=array("del Rio","del Campo","del Valle","del Monte","de Loriana","de Nora","de Aviles","de Blimea"); 
$ape2[]="de Grado";$ape2[]="de las Asturias"; 

#creamos una variable contador inicializada a cero 
$i=0; 

# establecemos la conexion con el servidor 
$c=mysqli_connect("localhost","carlos","carlos"); 

#asiganamos la conexión a una base de datos determinada 

mysqli_select_db($c,$base); 


#creamos un bucle definiendo el número de registros que queremos añadir 
# en este caso 10 
$registros_anadidos=0;
while($i<100){ 
#generamos numeros aleatorios 
#introducimos la semilla del generados 

mt_srand((double)microtime()*1000000); 
# generamos un numero de DNI aleatoriamente 

$v1=mt_rand(1,99999999); 


# elegimos aleatoriamente uno de los 10 nombres del array 
# elegimos el valor entre 0 y 9 porque los indices empiezan en CERO 

$v2=$nombres[mt_rand(0,9)]; 

# elegimos aleatoriamente uno de los 10 primeros apellidos del array 


$v3=$ape1[mt_rand(0,9)]; 


# elegimos aleatoriamente uno de los 10 primeros apellidos del array 

$v4=$ape2[mt_rand(0,9)]; 


# elegimos una fecha aleatoria entee 1-1-1970 (comienzo del tiempo UNIX) 
# y 462837600 que corresponde al 1 de Setiembre de 1984 
# en ese intervalo estará la fecha generada aleatoriamente 
# tomada con formato MySQL año-mes-dia (AAAA-MM-DD) 

$v5=date("Y-m-d",mt_rand(0,462837600)); 

#trateremos de buscar una coherencia aproximada 
# a los nombres y sexos de la lista aleatoria 
# si el nombre acaba en "a" asignaremos sexo femenino (F) 
# si acaba en "o" masculino (M) 

$v6=substr($v2,-1); 

if ($v6=="a"){ 
       $v6="F"; 
    }else{ 
       $v6="M"; 
} 

# extraemos de la fecha aleatoria anterior la hora 

$v7=date("h:i:s",mt_rand(0,462837600)); 



# como el valor del campo fumador es tipo CHAR(0) solo admite 
# como valores NULL ó "" 
# lo generamos así: 

$v8=mt_rand(0,1); 

if ($v8==0){ 
       $v8="\N"; 
     }else{ 
       $v8="''"; 
} 



# dado que tenemos en el campo SET SEIS POSIBLES OPCIONES 
# elegimos aleatoriamente un numero entre y 0 y 64 
# que son los equivalentes binarios de 000000 y 111111 


$v9=mt_rand(0,64); 

# AÑADIMOS EL NUEVO REGISTRO 

mysqli_query($c,"INSERT $tabla (DNI,Nombre,Apellido1,Apellido2, Nacimiento,Sexo,Hora,Fumador,Idiomas) VALUES ('$v1','$v2','$v3','$v4','$v5','$v6','$v7',$v8,'$v9')"); 

########################################################
#    UNA FUNCIÓN MUY INTERESANTE........
#    mysql_afected_rows($c) devuelve el número
#    de registros afectados por la ultima llamada 
#    a una INSERCION, MODIFICACION O BORRADO
#    DE REGISTROS A TRAVÉS DE mysql_query 
#    Aquí, dado que tenemos un bucle para la inserción
#    vamos acumulando sus valores en un contador
############################################################


$registros_anadidos += mysqli_affected_rows($c);


#comprobamos el resultado de la insercion 
# el error CERO significa NO ERROR 
# el error 1062 significa Clave duplicada 
# en otros errores forzamos a que nos ponga el número de error 
# y el significado de ese error (aunque sea en ingles).... 



if (mysqli_errno($c)==0){$i++; 
           
} 
#cerramos el bucle while del principio 
} 



# cerramos la conexion 
print "Se han añadido: ".$registros_anadidos ." registros";

mysqli_close($c); 

?> 
       


