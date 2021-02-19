
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
            Integer c = (Integer) pageContext.getAttribute("contador_entradas", pageContext.SESSION_SCOPE);
            if (c == null) {
                c = new Integer(10);
                pageContext.setAttribute("contador_entradas", c, pageContext.SESSION_SCOPE);
            }

            Cookie cookies[] = request.getCookies();
            if (cookies == null) {
                Cookie micookie = new Cookie("entradas", "50");
                micookie.setMaxAge(60 * 60 * 24 * 365);
                response.addCookie(micookie);
            }
            
            Cookie cookie[] = request.getCookies();
            for (int i = 0; i < cookie.length; i++) {
                String n = cookie[i].getName();
                String v = cookie[i].getValue();
                if (n.equals("entradas")) {
                    out.println("<p>Entradas restantes en total: <b>" + v + "</b></p>");
                }
            }
            out.println("<p>Aun puedes comprar <b>" + c.toString() + "</b> entradas en esta sesión</p>");
        %>
        <form action="operacion.jsp" method="post">
            Entradas: <input type="text" name="entradas" required/><br/>
            <input type="submit"/>
        </form>
    </body>
</html>
