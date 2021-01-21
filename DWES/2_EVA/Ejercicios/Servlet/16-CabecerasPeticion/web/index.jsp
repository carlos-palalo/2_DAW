
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <LINK rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>16-CabecerasPeticion - Lectura de las cabeceras de la petición</title>
    </head>
    <body>
        <h1>16-CabecerasPeticion - Lectura de las cabeceras de la petición</h1>
        <hr />
        
        <h2>Usando un enlace. Método GET, es decir, sin cuerpo, sólo cabeceras</h2>
        <a href="/16-CabecerasPeticion/ServletCabecerasPeticion">Ver las cabeceras de la petición</a>
        
        <hr />
        
        <h2>Usando un formulario. Método POST, es decir, con cuerpo y cabeceras</h2>
        <form action="/16-CabecerasPeticion/ServletCabecerasPeticion" method="post" accept-charset="UTF-8">
            Nombre<input type="text" name="nombre" />
            <br /><br />
            <input type="submit" />
        </form>
        
    </body>
</html>
