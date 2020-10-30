<?php
    $cadHTML = 'La etiqueta <strong>"html"</strong> define que se trata de código HTML.';
    $cadHead = 'La etiqueta <strong>"head"</strong> define la cabecera del documento.';
    $cadBody = <<<BODY
    La etiqueta <strong>"body"</strong> define el cuerpo del documento.
    BODY;

    echo $cadHTML,"<br>";
    echo $cadHead,"<br>";
    echo $cadBody,"<br>";
?>