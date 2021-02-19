
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>Venta de Entradas</title>
    </head>
    <body>
        <h1>Venta de Entradas</h1>
        <hr />
        <%
            int entradas = 0;
            if (request.getParameter("entradas") != null) {
                entradas = Integer.parseInt(request.getParameter("entradas"));
            }
            
            Integer c = (Integer) pageContext.getAttribute("contador_entradas", pageContext.SESSION_SCOPE);
            
            int total = 0;
            Cookie cookie[] = request.getCookies();
            for (int i = 0; i < cookie.length; i++) {
                String n = cookie[i].getName();
                String v = cookie[i].getValue();
                if (n.equals("entradas")) {
                    total = Integer.parseInt(v);
                }
            }
            
            if ((c - entradas) >= 0) {
                out.println("<p>Acabas de comprar <b>" + entradas + "</b> entradas</p>");
                c -= entradas;
                out.println("<p>Tienes ya <b>" + (10 - c) + "</b> entradas en tu poder</p>");
                total -= entradas;
                out.println("<p>Quedan disponibles un total de <b>" + total + "</b> entradas</p>");
                
                Cookie micookie = new Cookie("entradas", String.valueOf(total));
                micookie.setMaxAge(60 * 60 * 24 * 365);
                response.addCookie(micookie);
                pageContext.setAttribute("contador_entradas", c, pageContext.SESSION_SCOPE);
            } else {
                out.println("<p>La venta no es posible</p>");
            }
            
        %>
        <a href="index.jsp">Volver al inicio</a>
    </body>
</html>
