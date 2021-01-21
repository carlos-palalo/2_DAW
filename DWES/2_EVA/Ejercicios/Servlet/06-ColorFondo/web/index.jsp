
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>06-ColorFondo - Cambiar color de fondo</title>
    </head>
    <body>
        <h1>06-ColorFondo - Cambiar color de fondo</h1>
        <hr />
        <form method="post" action="/06-ColorFondo/CambiarColor">
            <select name="color">
                <option value="red">Rojo</option>
                <option value="yellow">Amarillo</option>
                <option value="green">Verde</option>
                <option value="blue">Azul</option>
            </select>
            <br />
            <input type="submit" value="Poner color" />
        </form>

    </body>
</html>
