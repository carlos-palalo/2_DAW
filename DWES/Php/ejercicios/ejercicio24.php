<?php
$filas = 1;
print("<table border=2 width=400 align=center>");
$num = [];
$numAux;
$aux = false;
echo "<tr>";
for ($i = 0; $i < 6; $i++) {
    echo "<td align=center>";
    if ($i > 0) {
        do {
            $numAux = rand(1, 49);
            for ($j = 0; $j < $i; $j++) {
                if ($num[$j] == $numAux) {
                    $numAux = rand(1, 49);
                    $aux = true;
                }
            }
        } while ($aux == true);
        $num[$i] = $numAux;
    } else {
        $num[0] = rand(1, 49);
    }
    echo $num[$i];
    print("</td>");
}
echo "</tr></table>";
