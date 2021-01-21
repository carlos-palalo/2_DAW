<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>08-Cookies - Cookies</title>
    </head>
    <body>
        <h1>08-Cookies - Cookies</h1>
        <hr />
        <% out.println("<h2>Se va a mandar una cookie</h2>"); %>
        <%
            Cookie micookie = new Cookie("ciudad","pucela");
            response.addCookie(micookie);
        %>
        <br /><br />
        <a href="leercookie.jsp">Leer la cookie</a>
    </body>
</html>
