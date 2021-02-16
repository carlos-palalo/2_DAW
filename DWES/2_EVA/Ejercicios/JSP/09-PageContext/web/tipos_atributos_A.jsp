
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
        <h2>Escritura de los atributos que se leerán en la página <u>tipos_atributos_B.jsp</u></h2>
        <%
            //PONER UN ATRIBUTO DE APLICACIÓN
            pageContext.setAttribute("atributo1", "valor1", pageContext.APPLICATION_SCOPE);
            
            //PONER UN ATRIBUTO DE SESIÓN
            pageContext.setAttribute("atributo2", "valor2", pageContext.SESSION_SCOPE);
            
            //PONER UN ATRIBUTO DE PÁGINA
            pageContext.setAttribute("atributo3", "valor3", pageContext.PAGE_SCOPE);
            
            //PONER UN ATRIBUTO DE PETICIÓN
            pageContext.setAttribute("atributo4", "valor4", pageContext.REQUEST_SCOPE);
        %>
        
        <a href="tipos_atributos_B.jsp">Siguiente página</a>
        
        <%--DESCOMENTAR LA LÍNEA SIGUIENTE PARA COMPROBAR LA REDIRECCIÓN--%>
        <jsp:forward page="tipos_atributos_B.jsp" />
    </body>
</html>
