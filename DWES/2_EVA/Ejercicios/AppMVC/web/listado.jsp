<%-- 
    Document   : listado
    Created on : 26-ene-2021, 20:35:52
    Author     : daw
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<%@page import="ejemplo.*,java.util.*"%>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>LISTADO DE DEPARTAMENTOS</title>
    </head>
    <body>
    <center>
        <h2>LISTADO DE DEPARTAMENTOS</h2>
        <table border="1">
            <tr>
                <th>Departamento</th>
                <th>Nombre</th>
                <th>Localidad</th>
            </tr>
            <%
                ArrayList listadep=(ArrayList)request.getAttribute("departamento");
                if(listadep!=null){
                    for(int i=0; i<listadep.size(); i++){
                        Departamento d=(Departamento)listadep.get(i); %>
            <tr>
                <td><%=d.getDeptno() %></td>
                <td><%=d.getDnombre() %></td>
                <td><%=d.getLoc() %></td>
            </tr>
            <%}
            }
            %>
        </table><br><br>
        <a href="index.html">Inicio</a>
    </center>
</body>
</html>
