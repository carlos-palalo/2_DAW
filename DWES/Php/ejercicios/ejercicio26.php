<?php
function tabla($filas, $col)
{
    $i = 1;
    print("<table border=2 width=400 align=center>");
    while ($filas > 0) :
        echo "<tr>";
        $columnas = $col;
        $filas--;
        while ($columnas > 0) :
            echo "<td align=center>";
            print $i++;
            print("</td>");
            $columnas--;
        endwhile;
        echo "</tr>";
    endwhile;
    print "</table>";
}

tabla(10,10);
