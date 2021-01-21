
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>08-Parametros - Lectura de los parámetros</title>
    </head>
    <body>
        <h1>08-Parametros - Lectura de los parámetros</h1>
        <hr />
        
        <br /><br />
        
        <a href="/08-Parametros/ServletParametros?p1=v1&p2=v2&p3=v3">Ejecutar mediante enlace (GET) y con parámetros</a>
        
        <br /><br />
        
        <form method="post" action="/08-Parametros/ServletParametros">
            Nombre<input type="text" name="nombre" />
            <br />
            
            Apellidos<input type="text" name="apellidos" />
            <br />
            
            Edad<input type="text" name="edad" />
            <br />
            
            <select name="ciudad" size="4" multiple="multiple">
                <option value="VA">Valladolid</option>
                <option value="MA">Madrid</option>
                <option value="BA">Barcelona</option>
                <option value="SE">Sevilla</option>
            </select>
            
            <br />
            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>
