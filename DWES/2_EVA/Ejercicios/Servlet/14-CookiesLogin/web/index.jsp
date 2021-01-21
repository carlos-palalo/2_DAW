
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <body>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>14-CookiesLogin - Autenticación con cookies</title>
    </head>
    <body>
        <h1>14-CookiesLogin - Autenticación con cookies</h1>
        <hr />
        <h2>Formulario de entrada</h2>
        <form action="/14-CookiesLogin/Servlet" method="post">
            Usuario<input type="text" name="usuario" />
            <br /><br />
            Clave <input type="password" name="clave"/>
            <br /><br />
            <input type="submit" />
            <br /><br />
            <input type="checkbox" name="recordarme" value="si" />Recordarme
            <input type="hidden" name="tipologin" value="usuarioyclave" />
        </form>
        <br /><br />
        <form action="/14-CookiesLogin/Servlet" method="post">
            <input type="submit" value="Entrar sin introducir Usuario/Clave" />
            <input type="hidden" name="tipologin" value="cookies" />
        </form>
    </body>
</html>
