
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>03-PasoParametros - Obtener parámetros con JSP</title>
    </head>
    <body>
        <h1>03-PasoParametros - Obtener parámetros con JSP</h1>
        <hr />
        <%-- Se usa el objeto implícito request --%>
        El nombre es: <b> <%= request.getParameter("nombre") %> </b>
        <br />
        La edad es: <b> <%= request.getParameter("edad") %> </b>
    </body>
    
</html>
