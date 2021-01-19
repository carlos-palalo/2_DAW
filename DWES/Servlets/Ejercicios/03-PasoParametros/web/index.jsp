
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>03-PasoParametros - Obtener parámetros con JSP</title>
    </head>
    <body>
        <h1>03-PasoParametros - Obtener parámetros con JSP</h1>
        <hr />
        <form action="parametros.jsp" method="post">
            Nombre<input type="text" name="nombre" />
            <br />
            Edad<input type="text" name="edad" />
            <br />
            <input type="submit" />
        </form>
    </body>
</html>
