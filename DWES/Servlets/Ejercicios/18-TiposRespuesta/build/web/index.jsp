
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>18-Tipos - Generar distintos tipos de respuesta</title>
    </head>
    <body>
        <h1>18-Tipos - Generar distintos tipos de respuesta</h1>
        <hr />
        
        <form action="/18-TiposRespuesta/Servlet" method="post">
            <select name="tiporespuesta">
                <option value="200">200-Correcto</option>
                <option value="401">401-No autorizado</option>
                <option value="403">403-Acceso prohibido</option>
                <option value="404">404-No encontrado</option>
                <option value="503">503-Servicio no disponible</option>
                <option value="505">505-Versión HTTP no disponible</option>
            </select>
            <input type="submit" />
        </form>
    </body>
</html>
