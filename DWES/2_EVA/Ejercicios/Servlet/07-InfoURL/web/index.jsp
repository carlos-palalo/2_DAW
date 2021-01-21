
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <LINK rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>07-InfoURL - Lectura de la información de la URL</title>
    </head>
    <body>
        <h1>07-InfoURL - Lectura de la información de la URL</h1>
        <hr />
        
        <a href="/07-InfoURL/ServletInfo">Ejecutar ServletInfo sin parámetros</a>
        
        <br /><br />
        
        <a href="/07-InfoURL/ServletInfo?p1=v1&p2=v2">Ejecutar ServletInfo con parámetros</a>
        
        <br /><br />
        
        <form method="post" action="/07-InfoURL/ServletInfo">
            <input type="submit" value="Usar el método POST" />
        </form>
    </body>
</html>
