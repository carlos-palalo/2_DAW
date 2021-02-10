<%-- 
    Document   : alta
    Created on : 26-ene-2021, 20:35:19
    Author     : daw
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>MODIFICACIÓN DE DEPARTAMENTOS</title>
    </head>
    <!-- Form de entrada de datos e Inserción en el JavaBean-clase Departamentos -->
    <jsp:useBean id="depart" scope="request" class="MisClases.Departamento"/>
    <jsp:setProperty name="depart" property="*"/>
    <% if (request.getParameter("deptno") != null) {%>
    <jsp:forward page="/controlador?accion=actualizar"/>
    <%}%>
    <body>
    <center>
        <h2>ACTUALIZACIÓN DE DATOS DE DEPARTAMENTOS</h2>
        <br>
        <form method="post">
            <p>Número de departamento: <input name="deptno" type="text" size="5"></p>
            <p>Nombre: <input name="dnombre" type="text" size="15"></p>
            <p>Localidad: <input name="loc" type="text" size="15"></p>
            <input type="submit" name="insertar" value="Actualizar departamento.">
            <input type="reset" name="cancelar" value="Cancelar entrada.">
        </form>
    </center>
</body>
</html>
