
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <body>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>13-CookiesBanco - Banco</title>
    </head>
    <body>
        <h1>13-CookiesBanco - Banco</h1>
        <hr />
            Operación a realizar<br />
            <form action="/13-CookiesBanco/Servlet" method="post">
            <select name="operacion">
                <option value="Ingresar">Realizar un ingreso</option>
                <option value="Sacar">Sacar dinero</option>
                <option value="Ver">Ver el saldo</option>
            </select>
            <br />
            Saldo<br /><input type="text" name="cantidad" />
            <br />
            <input type="submit" />
        </form>
        <br /><br />
    </body>
</html>

