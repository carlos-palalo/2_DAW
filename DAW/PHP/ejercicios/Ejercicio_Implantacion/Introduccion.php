<?php
include 'head.php';
                                             
echo'El ayuntamiento de Pesquera quiere modernizarse y utilizar las nuevas tecnologías, ha propuesto a un informático,
 que desarrolle una página para que los vecinos puedan reportar a través de la misma las incidencias que puedan detectar
 en el Municipio.<br>
El informático ha pensado que ya que no tienen un servidor de BD utilizar una estructura en forma de array asociativo
 para almacenar la información. <br>
 Dicha estructura contendrá los siguientes campos:<br><br>

<b>Incidencia (Num_incidencia, Urgencia, Tipo, FechaHora, Lugar, Ip, Descripcion)</b><br><br>
Hay que considerar que:
<ul>
    <li>* en el que el campo Urgencia se guardará Si o No dependiendo de la opción elegida.</li>
    <li>* la IP NO se debe introducir en ningún caso mediante el formulario,</li>
    <li>* ni el Numero de Incidencia puesto que es un campo auto numérico</li>
    <li>* ni la fecha que se cogerá del sistema.</li>
 
</ul> ';



 include 'pie.php';
											
                           