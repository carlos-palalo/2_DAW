
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>09-PageContext - Objeto implícito pageContext --> Atributos</title>
    </head>
    <body>
        <h1>09-PageContext - Objeto implícito pageContext --> Atributos</h1>
        <hr />
        <h2>Lectura de los atributos escritos en la página <u>tipos_atributos_A.jsp</u></h2>
        Atributo de aplicación: <b><%= pageContext.getAttribute("atributo1", pageContext.APPLICATION_SCOPE) %></b>
        <br />
        Atributo de sesión: <b><%= pageContext.getAttribute("atributo2", pageContext.SESSION_SCOPE) %></b>
        <br />
        Atributo de página (DEBE SER NULO SIEMPRE): <b><%= pageContext.getAttribute("atributo3", pageContext.PAGE_SCOPE) %></b>
        <br />
        Atributo de petición (NULO SI VOY A TRAVÉS DE ENLACE, NO NULO CON REDIRECCIÓN): <b><%= pageContext.getAttribute("atributo4", pageContext.REQUEST_SCOPE) %></b>
    </body>
</html>
