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
        <title>LISTADO DE EMPLEADOS</title>
    </head>
    <body>
    <center>
        <h2>LISTADO DE EMPLEADOS</h2>
        <table border="1">
            <tr>
                <th>Empleado</th>
                <th>Apellido</th>
                <th>Oficio</th>
                <th>Dir</th>
                <th>Fecha de Alta</th>
                <th>Salario</th>
                <th>Comisión</th>
                <th>Departamento</th>
            </tr>
            <%
                ArrayList listaemp=(ArrayList)request.getAttribute("empleados");
                if(listaemp!=null){
                    for(int i=0; i<listaemp.size(); i++){
                        Empleado e=(Empleado)listaemp.get(i); %>
            <tr>
                <td><%=e.getEmpno() %></td>
                <td><%=e.getApellido() %></td>
                <td><%=e.getOficio() %></td>
                <td><%=e.getDir() %></td>
                <td><%=e.getFechaalt() %></td>
                <td><%=e.getSalario() %></td>
                <td><%=e.getComision() %></td>
                <td><%=e.getDeptno() %></td>
            </tr>
            <%}
            }
            %>
        </table><br><br>
        <a href="index.html">Inicio</a>
    </center>
</body>
</html>
