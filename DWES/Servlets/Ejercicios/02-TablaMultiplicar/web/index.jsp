<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>02-TablaMultiplicar - Tabla de multiplicar</title>
    </head>
    <body>
        <h1>02-TablaMultiplicar - Tabla de multiplicar</h1>
        <hr />
        <table border="2">
        <% for(int k=1;k<=10;k++){ %>
        <tr>
            <% for(int j=1;j<=10;j++){ %>
            <td>  <%=j*k%>  </td>
            <% } %>
        </tr>
        <% } %>
        </table>
    </body>
</html>