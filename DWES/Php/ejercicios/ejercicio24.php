<?php
$filas = 1;
print("<table border=2 width=400 align=center>");
$num=[];
do{
    for($i=0; $i<6; $i++){
        
    }
}while($num);

while ($filas > 0) :
    echo "<tr>";
    $columnas = 6;
    $filas--;
    while ($columnas > 0) :
        echo "<td align=center>";
        $i = rand(1,49);
        print $i;
        print("</td>");
        $columnas--;
    endwhile;
    echo "</tr>";
endwhile;
print "</table>";
