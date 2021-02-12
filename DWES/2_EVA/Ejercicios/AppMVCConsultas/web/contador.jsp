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
        <title>DEPARTAMENTOS Y NUM EMPLEADOS</title>
    </head>
    <body>
    <center>
        <h2>DEPARTAMENTOS Y NUM EMPLEADOS</h2>
        <table border="1">
            <tr>
                <th>Departamento</th>
                <th>Nombre</th>
                <th>Nº Empleados</th>
            </tr>
            <%
                ArrayList listar = (ArrayList) request.getAttribute("departamentos");
                if (listar != null) {
                    for (int i = 0; i < listar.size(); i++) {
                        Departamento d = (Departamento) listar.get(i);%>
            <tr>
                <td><%=d.getDeptno()%></td>
                <td><%=d.getDnombre()%></td>
                <td><%=d.getNumEmp()%></td>
            </tr>
            <%}
                }
            %>
        </table><br><br>
        <a href="index.html">Inicio</a>
    </center>
</body>
</html>
