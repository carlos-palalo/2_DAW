
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>07-ControlarLogin - Acceso de usuarios con redireccionamiento</title>
    </head>
    <body>
        <h1>07-ControlarLogin - Acceso de usuarios con redireccionamiento</h1>
        <hr />
        <h2 style="color:blue">Inicio</h2>
        Bienvenido Mr. <b><%= request.getParameter("usuario") %></b>
    </body>
</html>
