
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>10-TiposAtributosContador - Contador con un atributo de petición</title>
    </head>
    <body>
        <h1>10-TiposAtributosContador - Contador con un atributo de petición</h1>
        <hr />
        <%
            Integer c = (Integer) pageContext.getAttribute("contador_peticion", pageContext.REQUEST_SCOPE);            
            if (c == null) {
                c = new Integer(1);
            } else {
                c = c + 1;
            }
            
            out.println("<h2>"+c.toString()+"</h2>");

            pageContext.setAttribute("contador_peticion",c,pageContext.REQUEST_SCOPE);
        %>
        <jsp:forward page="peticionB.jsp" />
    </body>
</html>
