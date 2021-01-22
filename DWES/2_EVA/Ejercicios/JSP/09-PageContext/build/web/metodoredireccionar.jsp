
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>09-PageContext - Objeto implícito PageContext --> Redireccionar</title>
    </head>
    <body>
        <h1>09-PageContext - Objeto implícito PageContext --> Redireccionar</h1>
        <hr />
        <%
            //Redireccionar a un Servlet
            //pageContext.forward("/Servlet");
            
            //Redireccionar a una página JSP. Descomentar la siguiente línea
            //y comentar la anterior --> pageContext.forward("/Servlet");
            pageContext.forward("otrapagina.jsp");
        %>
    </body>
</html>
