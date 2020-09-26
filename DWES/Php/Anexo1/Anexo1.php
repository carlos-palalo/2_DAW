<HTML>

<HEAD>
  <LINK REL="stylesheet" type="text/css" href="php.css">
  <style type="text/css">
    A:link {
      text-decoration: none;
      color: #009400
    }

    A:visited {
      text-decoration: none;
      color: #009400
    }

    a:hover {
      text-decoration: none;
      color: #ff9400
    }
  </style>
</HEAD>

<BODY>
  <table align=center width=80% border=0>
    <td id="normalC">
      Algunos caracteres tales como <span id="rojo">&lt;</span> o como <span id="rojo">$</span> pueden prestarse a confusión a la hora de ser insertados como un <i>carácter más de texto</i>.<BR><BR> Si insertamos <i>directamente desde el teclado</i> <span id="rojo">&lt;</span> <B>no se visualizará</B> porque el <I>navegador</I> <B>interpretará este símblo como el comienzo de una etiqueta HTML</B>.<BR><BR>
      Si hiciéramos lo mismo con <span id="rojo">$</span> y este símbolo estuviera contenido en un script PHP <B>tampoco se visualizaría</B> ya que <I>el intérprete de PHP</I> <B>lo consideraría como el comienzo un nombre de variable</B>.<BR><BR>
      Cuando se trata de que este tipo de caracteres <B>aparezcan escritos en una página</B> es necesario recurrir a una <i>sintaxis alternativa</i> que aparece recogida en la tabla que tienes aquí debajo.<BR><BR>
      Si pretendes que se visualice un símbolo de las características mencionadas anteriormente, <I>en vez de teclearlo directamente</I> debes escribir su <B>nº HTML</B> ó –en el caso de que exista– <B>su nombre HTML</B>.<BR><BR>
      Por ejemplo, si quieres que aparezca como texto <span id="rojo"><B>&gt;</B></span> debes escribir <span id="rojo"><B>&amp;gt;</B></span> ó <span id="rojo"><B>&amp;#60;</B></span> (el punto y coma también debes escribirlo). Si se tratara de <span id="rojo">$</span> deberías escribir <span id="rojo"><B>&amp;#36;</B></span> y de igual forma cualquier otro con significado para HTML o para PHP.<BR><BR>

    </td>
  </table><br><br>

  <table align=center border=2>
    <td colspan=5 id="normalC">Tabla de ASCII standart<br>ISO 8859-1 Alfabeto romano numero 1<br>
      Soporte para todos los browsers</td>
    <tr>
      <td id="chiquiC">Decimal</td>
      <td id="chiquiC">Hexadecimal</td>
      <td id="chiquiC">Carácter</td>
      <td id="chiquiC">Nº HTML</td>
      <td id="chiquiC">Nombre HTML</td>
    <tr>
    <?php
      $literal = array(
        32 => "&nbsp;",
        33 => "&nbsp;",
        34 => "&amp;quot;",
        35 => "&nbsp;",
        36 => "&nbsp;",
        37 => "&nbsp;",
        38 => "&amp;amp;",
        60 => "&amp;lt;",
        61 => "&nbsp;",
        62 => "&amp;qt;",
        160 => "&amp;nbsp;",
        161 => "&amp;iexcl;",
        162 => "&amp;cent;",
        163 => "&amp;pound;",
        164 => "&amp;curren;",
        165 => "&amp;yen;",
        166 => "&amp;brvbar;",
        167 => "&amp;sect;",
        168 => "&amp;uml;",
        169 => "&amp;copy;",
        170 => "&amp;ordf;",
        171 => "&amp;laquo;",
        172 => "&amp;not;",
        173 => "&amp;shy;",
        174 => "&amp;reg;",
        175 => "&amp;macr;",
        176 => "&amp;deg;",
        177 => "&amp;plusmn;",
        178 => "&amp;sup2;",
        179 => "&amp;sup3;",
        180 => "&amp;acute;",
        181 => "&amp;micro;",
        182 => "&amp;para;",
        183 => "&amp;middot;",
        184 => "&amp;cedil;",
        185 => "&amp;sup1;",
        186 => "&amp;ordm;",
        187 => "&amp;raquo;",
        188 => "&amp;frac14;",
        189 => "&amp;frac12;",
        190 => "&amp;frac34;",
        191 => "&amp;iquest;",
        192 => "&amp;Agrave;",
        193 => "&amp;Aacute;",
        194 => "&amp;Acirc;",
        195 => "&amp;Atilde;",
        196 => "&amp;Auml;",
        197 => "&amp;Aring;",
        198 => "&amp;AElig;",
        199 => "&amp;Ccedil;",
        200 => "&amp;Egrave;",
        201 => "&amp;Eacute;",
        202 => "&amp;Ecirc;",
        203 => "&amp;Euml;",
        204 => "&amp;lgrave;",
        205 => "&amp;lacute;",
        206 => "&amp;lcirc;",
        207 => "&amp;luml;",
        208 => "&amp;ETH;",
        209 => "&amp;Ntilde;",
        210 => "&amp;Ograve;",
        211 => "&amp;Oacute;",
        212 => "&amp;Ocirc;",
        213 => "&amp;Otilde;",
        214 => "&amp;Ouml;",
        215 => "&amp;times;",
        216 => "&amp;Oslash;",
        217 => "&amp;Ugrave;",
        218 => "&amp;Uacute;",
        219 => "&amp;Ucirc;",
        220 => "&amp;Uuml;",
        221 => "&amp;Yacute;",
        222 => "&amp;THORN;",
        223 => "&amp;szlig;",
        224 => "&amp;agrave;",
        225 => "&amp;aacute;",
        226 => "&amp;acirc;",
        227 => "&amp;atilde;",
        228 => "&amp;auml;",
        229 => "&amp;aring;",
        230 => "&amp;aelig;",
        231 => "&amp;ccedil;",
        232 => "&amp;egrave;",
        233 => "&amp;eacute;",
        234 => "&amp;ecirc;",
        235 => "&amp;euml;",
        236 => "&amp;igrave;",
        237 => "&amp;iacute;",
        238 => "&amp;icirc;",
        239 => "&amp;iuml;",
        240 => "&amp;eth;",
        241 => "&amp;ntilde;",
        242 => "&amp;ograve;",
        243 => "&amp;oacute;",
        244 => "&amp;ocirc;",
        245 => "&amp;otilde;",
        246 => "&amp;ouml;",
        247 => "&amp;divide;",
        248 => "&amp;oslash;",
        249 => "&amp;ugrave;",
        250 => "&amp;uacute;",
        251 => "&amp;ucirc;",
        252 => "&amp;uuml;",
        253 => "&amp;yacute;",
        254 => "&amp;thorm;",
        255 => "&amp;yuml;",
      );

      for ($j = 39; $j < 60; $j++) {
        $literal[$j] = "&nbsp;";
      };

      for ($j = 63; $j < 160; $j++) {
        $literal[$j] = "&nbsp;";
      };

      for ($i = 32; $i <= 255; $i++) {
        echo "<td id='normalC'>&nbsp;", $i, "&nbsp;</td>";
        echo "<td id='normalC'>&nbsp;", dechex($i), "&nbsp;</td>";
        echo "<td id='normalC'>&nbsp;", chr($i), "&nbsp;</td>";
        echo "<td id='normalC'>&nbsp;&#038;&#035;", $i, ";&nbsp;</td>";
        echo "<td id='normalC'>&nbsp;", $literal[$i], "&nbsp;</td><tr>";
      };
      ?>  
  </table>
</body>

</html>