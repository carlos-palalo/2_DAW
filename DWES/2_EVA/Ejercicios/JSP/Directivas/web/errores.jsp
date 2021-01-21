<%-- 
    Document   : errores
    Created on : 24-ene-2018, 20:16:04
    Author     : jose luis
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page isErrorPage="true"%>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>05-Directivas - Directiva Page</title>
    </head>
    <body>
        <h1>05-Directivas - Directiva Page</h1>
        <hr />

        <h2 style="color:red">Página de errores (isErrorPage)</h2>
        <h3><b>ERROR:</b><i><%= exception.getMessage() %></i></h3>

    </body>
</html>
