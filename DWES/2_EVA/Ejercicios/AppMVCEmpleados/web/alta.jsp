<%-- 
    Document   : alta
    Created on : 26-ene-2021, 20:35:19
    Author     : daw
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<%@page import="java.util.*,java.sql.*"%>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ALTA DE EMPLEADOS</title>
    </head>
    <!-- Form de entrada de datos e Inserción en el JavaBean-clase Departamentos -->
    <jsp:useBean id="emple" scope="request" class="MisClases.Empleado"/>
    <jsp:setProperty name="emple" property="*"/>
    <% if (request.getParameter("empno") != null) {%>
    <jsp:forward page="/controlador?accion=insertar"/>
    <%}%>
    <body>
    <center>
        <h2>ENTRADA DE DATOS DE EMPLEADOS</h2>
        <br>
        <form method="post">
            <p>Número de empleado: <input name="empno" type="text" size="5"></p>
            <p>Apellido: <input name="apellido" type="text" size="15"></p>
            <p>Oficio: <input name="oficio" type="text" size="15"></p>
            <p>Dir: <input name="dir" type="text" size="5"></p>
            <% 
                java.util.Date hoy = new java.util.Date();
                java.sql.Date fhoy = new java.sql.Date(hoy.getTime());
            %>
            <p>Fecha de alta: <input name="fechaalt" readonly="readonly" type="text" size="15" placeholder="<%=fhoy%>"></p>
            <p>Salario: <input name="salario" type="text" size="10"></p>
            <p>Comisión: <input name="comision" type="text" size="5"></p>
            <p>Departamento: <input name="deptno" type="text" size="5"></p>
            <input type="submit" name="insertar" value="Insertar Empleado.">
            <input type="reset" name="cancelar" value="Cancelar entrada.">
        </form>
    </center>
</body>
</html>
