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
        <title>LISTADO DE EMPLEADOS Y DEPARTAMENTOS</title>
    </head>
    <body>
    <center>
        <h2>LISTADO DE EMPLEADOS Y DEPARTAMENTOS</h2>
        <table border="1">
            <tr>
                <th>Empleado</th>
                <th>Apellido</th>
                <th>Departamento</th>
                <th>Nombre</th>
            </tr>
            <%
                ArrayList listar = (ArrayList) request.getAttribute("empleados");
                if (listar != null) {
                    for (int i = 0; i < listar.size(); i++) {
                        Empleado e = (Empleado) listar.get(i);%>
            <tr>
                <td><%=e.getEmpno()%></td>
                <td><%=e.getApellido()%></td>
                <td><%=e.getDeptno()%></td>
                <td><%=e.getDnombre()%></td>
            </tr>
            <%}
                }
            %>
        </table><br><br>
        <a href="index.html">Inicio</a>
    </center>
</body>
</html>
