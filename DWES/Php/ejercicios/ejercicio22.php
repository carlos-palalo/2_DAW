<?php
$validador = false;
$i = 0;

printf("<table border=3 width=400>");
while ($validador == false) :
    echo "<tr>";
    $col = 1;
    while ($col > 0) :
        echo "<td align=center style='background:RGB($i,$i,$i)'>Código rgb($i,$i,$i)</td>";
        $col--;
        if ($i == 255) {
            $validador = true;
        } else {
            $i += 5;
        }
    endwhile;
    echo "</tr>";
endwhile;
printf("</table>");
