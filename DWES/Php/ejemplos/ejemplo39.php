<?php
$A = 0;
/* utilicemos ahora el bucle para crear un tabla HTML empecemos escribiendo la etiqueta de apertura de esa tabla fuera del bucle (ya que esa se repite una sola vez) y utilicemos el bucle para escribir las celdas y sus contenidos */
print("<table width=300 border=2>");
while ($A <= 5) {
    echo "<tr><td align=center>";
    print $A;
    # esta instrucción es importantisima
    # si no modificamos el valor de $A el bucle sería infinito
    $A++;
    print("</td></tr>");
}
# cerremos la etiqueta table
print "</table>";
