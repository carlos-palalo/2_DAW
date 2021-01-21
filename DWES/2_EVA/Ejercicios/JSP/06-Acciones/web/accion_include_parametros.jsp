
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>06-Acciones - Acciones (jsp:include pasando parámetros)</title>
    </head>
    <body>
        <h1>06-Acciones - Acciones (jsp:include pasando parámetros)</h1>
        <hr />
        <br />
        <jsp:include page="inclusion_parametros.jsp">
            <jsp:param name="nombre" value="pepe" />
            <jsp:param name="edad" value="20" />
        </jsp:include>
    </body>
</html>
