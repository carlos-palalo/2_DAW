
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>07-ControlarLogin - Acceso de usuarios con redireccionamiento</title>
    </head>
    <body>
        <h1>APP Saldo</h1>
        <hr />
        <%
            Cookie cookies[] = request.getCookies();
            if (cookies == null) {
                out.println("<h3>No hay cookies<h3>");
            } else {
                boolean flag = false;
                for (int i = 0; i < cookies.length; i++) {
                    String n = cookies[i].getName();
                    String v = cookies[i].getValue();
                    if (n.equals("saldo")) {
                        flag = true;
                    }
                }
                if (!flag) {
                    Cookie micookie = new Cookie("saldo", "0");
                    response.addCookie(micookie);
                }
            }
        %>
        <form action="/AppSaldo/Controlador" method="post">
            Cantidad: <input type="text" name="cantidad"/><br/><br>
            <select name="op">
                <option value="ingreso">Ingresar dinero</option>
                <option value="sacar">Sacar dinero</option>
                <option value="ver">Ver saldo</option>
            </select>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>
