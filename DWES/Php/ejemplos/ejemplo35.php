<?php
# el condicional if estable como condición
# que el acceso a este script proceda de la direccion indicada
# en este caso hemos puesto como condición que ese valor
# sea la dirección de esta página
if ($_SERVER['HTTP_REFERER'] == "http://localhost/cursophp/php37.php") {
    # si accedemos desde esta página, el enlace que tienes aqui debajo
    # veremos que aparece este print, es decir se visualizaría todo
    # lo contenido antes del else
    print "ejecuto sin problemas el script.";
    print "Vienes de:" . $_SERVER['HTTP_REFERER'];
} else {
    # si accedes desde un sitio diferente te aparecerá este mensaje
    # puedes probar escribiendo en tu navegador
    # http://localhost/cursophp/ejemplo35.php
    # y comprobarás que aparece este mensaje
    "No puedes ver esta pagina";
    exit;
}
