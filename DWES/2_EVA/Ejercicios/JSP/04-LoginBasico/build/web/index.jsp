<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>04-LoginBasico - Acceso de usuarios</title>
    </head>
    <body>
        <h1>04-LoginBasico - Acceso de usuarios</h1>
        <hr />
        <%! String usuarios[][] = {{"nombre1", "clave1"}, {"nombre2", "clave2"}};%>
        <% boolean valido=false;
            if ((request.getParameter("nombre") != null) && (request.getParameter("pass") != null)) {
                for (int i = 0; i <= 1; i++) {
                    if ((request.getParameter("nombre").equals(usuarios[i][0])) && (request.getParameter("pass").equals(usuarios[i][1]))) {
                        valido = true;
                    }
                }
            } %>

            <% if (!valido) {%>
        <form action="index.jsp" method="get">
            Nombre: <input type="text" name="nombre"/><br/>
            Contraseña: <input type="password" name="pass"/><br/>
            <input type="submit"/>
        </form>
        <% } else {%>
        Bienvenido.
        <% }  %>
    </body>
</html>
