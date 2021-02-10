<%-- 
    Document   : alta
    Created on : 26-ene-2021, 20:35:19
    Author     : daw
--%>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>BAJA DE EMPLEADOS</title>
    </head>
    <!-- Form de entrada de datos e Inserción en el JavaBean-clase Departamentos -->
    <jsp:useBean id="emple" scope="request" class="MisClases.Empleado"/>
    <jsp:setProperty name="emple" property="*"/>
    <% if (request.getParameter("empno") != null) {%>
    <jsp:forward page="/controlador?accion=eliminar"/>
    <%}%>
    <body>
    <center>
        <h2>ENTRADA DE DATOS DE EMPLEADOS</h2>
        <br>
        <form method="post">
            <p>Número de empleado: <input name="empno" type="text" size="5"></p>
            <input type="submit" name="insertar" value="Eliminar Empleado.">
            <input type="reset" name="cancelar" value="Cancelar entrada.">
        </form>
    </center>
</body>
</html>
