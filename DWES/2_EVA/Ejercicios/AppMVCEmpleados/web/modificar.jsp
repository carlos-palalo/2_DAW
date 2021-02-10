<%-- 
    Document   : alta
    Created on : 26-ene-2021, 20:35:19
    Author     : daw
--%>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ACTUALIZACIÓN DE EMPLEADOS</title>
    </head>
    <!-- Form de entrada de datos e Inserción en el JavaBean-clase Departamentos -->
    <jsp:useBean id="emple" scope="request" class="MisClases.Empleado"/>
    <jsp:setProperty name="emple" property="*"/>
    <% if (request.getParameter("empno") != null) {%>
    <jsp:forward page="/controlador?accion=actualizar"/>
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
            <p>Salario: <input name="salario" type="text" size="10"></p>
            <p>Comisión: <input name="comision" type="text" size="5"></p>
            <p>Departamento: <input name="deptno" type="text" size="5"></p>
            <input type="submit" name="insertar" value="Actualizar Empleado.">
            <input type="reset" name="cancelar" value="Cancelar entrada.">
        </form>
    </center>
</body>
</html>
