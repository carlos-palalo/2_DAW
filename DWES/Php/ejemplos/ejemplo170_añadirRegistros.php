<?php
# recogemos en una variable el nombre de BASE DE DATOS 

$base="carlos"; 

# recogemos en una variable el nombre de la TABLA 

$tabla="demo4"; 

# recogemos en variables los valores que vamos a asignar a cada campo 
$v1="9876545"; 
$v2="Gonzalo"; 
$v3="Fernández"; 
$v4="del Campo"; 
$v5="1957/11/21"; 
$v6="M"; 
$v7=date("h:i:s"); 
$v8="\n"; 
$v9=7; 

# establecemos la conexion con el servidor 

$c=mysqli_connect("localhost","carlos","carlos"); 

#asiganamos la conexión a una base de datos determinada 

mysqli_select_db($c,$base); 

# AÑADIMOS EL NUEVO REGISTRO 
#####################################################################
#                  ¡¡MUCHO CUIDADO CON LOS VALUES!!                 #        
#     OBSERVA QUE AUNQUE SON VARIABLES VAN ENTRE COMILLAS           #
#          salvo el caso de $v9 que es un NUMERO                    #
#            ESTE DETALLE ES SUMAMENTE IMPORTE                      #
#####################################################################

mysqli_query($c,"INSERT $tabla (DNI,Nombre,Apellido1,Apellido2, Nacimiento,Sexo,Hora,Fumador,Idiomas) VALUES ('$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8',$v9)"); 

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
       


