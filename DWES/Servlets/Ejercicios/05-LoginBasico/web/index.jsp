
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>07-LoginBasico - Validación de usuario básica</title>
    </head>
    <body>
        <h1>07-LoginBasico - Validación de usuario básica</h1>
        <form action="/07-LoginBasico/Entrar" method="post">
            Usuario<input type="text" name="usuario" />
            <br />
            Clave<input type="password" name="clave" />
            <br />
            <input type="submit" value="Entrar">
        </form>
    </body>
</html>
