
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>06-Acciones - Acciones (jsp:forward pasando parámetros)</title>
    </head>
    <body bgcolor="yellow">
        <h1>06-Acciones - Acciones (jsp:forward pasando parámetros)</h1>
        <hr />
        <h2>He llegado aquí desde la página A</h2>
        <h3>Parámetros recibidos</h3>
        Nombre: <b> <%= request.getParameter("nombre") %> </b>
        <br />
        Edad: <b> <%= request.getParameter("edad") %> </b>
    </body>
</html>
