<%-- 
    Document   : listar
    Created on : 19-feb-2021, 20:09:16
    Author     : daw
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<%@page import="MisClases.*,java.util.*,java.sql.*"%>
<jsp:useBean id="emple" scope="request" class="MisClases.Pais"/>
<jsp:getProperty name="emple" property="*"/>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>App Ciudades jsp</title>
    </head>
    <body>
        <h1>App Ciudades - Actualizar</h1>
        <hr>
    <sql:setDataSource var="ds" scope="page"
                       driver="com.microsoft.sqlserver.jdbc.SQLServerDriver"
                       url="jdbc:sqlserver://localhost:3306;databasename=carlos" user="carlos" password="carlos"/>
    <sql:update var="resultado" sql=""></sql:update>
    <a href="listar.jsp">Actualizar Ciudades</a><br>
    <a href="index.jsp">Volver a Inicio</a><br>
</body>
</html>

