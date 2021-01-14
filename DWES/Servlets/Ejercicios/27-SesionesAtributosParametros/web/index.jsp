
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>27-SesionesAtributosParametros - De parámetros a atributos de sesión</title>
    </head>
    <body>
        <h1>27-SesionesAtributosParametros - De parámetros a atributos de sesión</h1><hr />
        <form action="/27-SesionesAtributosParametros/Servlet1" method="post">
            Login<input type="text" name="usuario" />
            <br /><br />
            Clave<input type="password" name="clave" />
            <br /><br />
            <input type="submit" value="Entrar" />
        </form>
    </body>
</html>
