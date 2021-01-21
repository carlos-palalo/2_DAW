
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>15-CaracteresEspeciales - Tratamiento de caracteres especiales</title>
    </head>
    <body>
        <h1>15-CaracteresEspeciales - Tratamiento de caracteres especiales</h1>
        <hr />
        
        <br />
        
        <a href="/15-CaracteresEspeciales/Servlet?p1=v1&p2=luis&maría">Ejecutar mediante enlace (GET) y con parámetros</a>
        
        <br /><hr /><br />
        
        <form method="post" action="/15-CaracteresEspeciales/Servlet" >
            P1<input type="text" name="p1" />
            <br />
            
            P2 <input type="text" name="p2" /> (Se recuperará tal cual)
            <br />
            
            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>
