<%-- 
    Document   : index
    Created on : 13-dic-2018, 17:37:03
    Author     : jose luis
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <h1>PrimerServlet - Ejemplo básico de ejecución un Servlet</h1>
        <hr>
        
        <br /><br />
        <a href="http://localhost:8084/PrimerServlet/ServletPrimero">Enlace al servlet</a>
        
        <br /><br />
        <a href="/PrimerServlet/ServletPrimero">Enlace al servlet</a>
        
        <br /><br />
        <form action="/PrimerServlet/ServletPrimero" method="get">
            <input type="submit" value="Ejecutar Servlet" />
        </form>
        
        <br /><br />
        <form action="http://localhost:8084/PrimerServlet/ServletPrimero" method="get">
            <input type="submit" value="Ejecutar Servlet" />
        </form>
    </body>
</html>
