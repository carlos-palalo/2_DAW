<%-- 
    Document   : listado
    Created on : 26-ene-2021, 20:35:52
    Author     : daw
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<%@page import="MisClases.*,java.util.*"%>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>LISTADO DE CLIENTES</title>
    </head>
    <body>
    <center>
        <h2>LISTADO DE CLIENTES</h2>
        <table border="1">
            <tr>
                <th>Cliente</th>
                <th>Nombre</th>
                <th>Categoria</th>
            </tr>
            <%
                ArrayList listaemp=(ArrayList)request.getAttribute("clientes");
                if(listaemp!=null){
                    for(int i=0; i<listaemp.size(); i++){
                        Cliente c=(Cliente)listaemp.get(i); %>
            <tr>
                <td><%=c.getId() %></td>
                <td><%=c.getNombre() %></td>
                <td><%=c.getCategoria() %></td>
            </tr>
            <%}
            }
            %>
        </table><br><br>
        <a href="index.html">Inicio</a>
    </center>
</body>
</html>
