<HTML> 
<HEAD> 
    <TITLE>Ejemplo 17 - PHP</TITLE> 
    </HEAD> 
    <BODY> 
        <?php 
            $cadena1="Esto es una cadena de texto";
            
            $cadena2=<<<Pepe
            Esta es otra cadena escrita con la sintaxis de documento incrustado. Se escribe en varias líneas y tiene la sintaxis siguiente. Después de escribir el nombre de la variable y el signo igual se ponen los tres  <<< y un nombre cualquiera. En este caso, Pepe. Luego hay que saltar de línea y escribir el texto con las líneas que se desee, pero cuidado... a la hora de visualizar la cadena con la instrucción echo todo este texto se verá seguido ya que para que se visualizaran saltos de línea en una página web habría que poner las famosas etiquetas <BR>. Se indica el final de la cadena escribiendo de nuevo el nombre asignado en la primera línea -Pepe- pero teniendo la precaución de escribirlo en una linea nueva al final de todo el texto... Así como lo ves en el código fuente. 
            Pepe;

            $cadena3 = <<<Pepa
            Esta es otra cadena con el nombre Pepa puedo escribir Pepa cuantas veces quiera porque el PHP no interpretará el final de documento incrustado hasta que no la escriba en una sola linea y seguida del punto y coma
            Pepa;

            echo $cadena1,"<BR>"; 
            echo $cadena2,"<BR>"; 
            echo $cadena3,"<BR>"; 
        ?> 
</BODY> 
</HTML>