<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>31-IndentificacionUsuariosTodaWeb - Usar un objeto usuario como variable de sesión - Usar un objeto usuario como variable de sesión</title>
    </head>
    <body>
        <h1>31-IndentificacionUsuariosTodaWeb - Usar un objeto usuario como variable de sesión</h1><hr />
        <br />
        <form action="/31-IndentificacionUsuariosTodaWeb/login" method="post">
            Usuario<input type="text" name="user" />
            <br />
            Contraseña<input type="password" name="clave" />
            <br />
            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>