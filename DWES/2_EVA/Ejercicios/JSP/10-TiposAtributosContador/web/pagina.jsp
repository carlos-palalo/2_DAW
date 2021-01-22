
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>10-TiposAtributosContador - Contador con un atributo de página</title>
    </head>
    <body>
        <h1>10-TiposAtributosContador - Contador con un atributo de página</h1>
        <hr />
        <%
            Integer c = (Integer) pageContext.getAttribute("contador_pagina", pageContext.PAGE_SCOPE);
            if (c == null) {
                c = new Integer(1);
            } else {
                c = c + 1;
            }

            out.println("<h2>"+c.toString()+"</h2>");

            pageContext.setAttribute("contador_pagina", c, pageContext.PAGE_SCOPE);
        %>

        <jsp:forward page="paginaB.jsp" />
    </body>
</html>
