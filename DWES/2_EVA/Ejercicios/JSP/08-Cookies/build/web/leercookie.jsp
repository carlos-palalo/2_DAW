
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
        <% out.println("<h2>Leemos la cookie</h2>"); %>
        <%
            Cookie cookies[] = request.getCookies();
            if(cookies == null)
                out.println("<h3>No hay cookies<h3>");
            else{
                for(int i=0;i<cookies.length;i++){
                    String n = cookies[i].getName();
                    String v = cookies[i].getValue();
                    if(n.equals("ciudad"))
                        out.println("<h3>Cookie: <i>"+n+" - "+v+"</i></h3>");
                }
                
            }
        %>
    </body>
</html>
