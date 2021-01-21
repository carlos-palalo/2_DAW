
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>38-BasesDatosInsercion - Base de datos (IV)</title>
    </head>
    <body>
        <h1>38-BasesDatosInsercion - Base de datos (IV)</h1>
        <h2>Inserción</h2><hr />
        <form method="post" action="/38-BasesDatosInsercion/Insertar">
            Nº Depto<input type="text" name="ndep" />
            <br />
            Nombre<input type="text" name="dnombre" />
            <br />
            Localidad<input type="text" name="localidad" />
            <br />
            <input type="submit" value="Insertar" />
        </form>
    </body>
</html>