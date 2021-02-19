<%-- 
    Document   : listar
    Created on : 19-feb-2021, 20:09:16
    Author     : daw
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<!-- select count(ciudad) as "ciudad", count(codigocliente) as "numcliente", avg(LimiteCredito) as "limitecredito" from clientes2 group by pais -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>App Ciudades jsp</title>
    </head>
    <body>
        <h1>App Ciudades - Listado</h1>
        <hr>
    <sql:setDataSource var="ds" scope="page"
                       driver="com.microsoft.sqlserver.jdbc.SQLServerDriver"
                       url="jdbc:sqlserver://localhost:3306;databasename=carlos" user="carlos" password="carlos"/>
    <sql:query var="filas" sql='select count(ciudad) as "ciudad", count(codigocliente) as "numcliente", avg(LimiteCredito) as "limitecredito" from clientes2 group by pais' ></sql:query>
    <table border="1">
        <thead>
        <c:forEach var="n" items="${filas.columnNames}">
            <th>${n}</th>
        </c:forEach>    
    </thead>
    <tbody>
    <c:forEach var="unaFila" items="${filas.rowsByIndex}" >
        <tr>
        <c:forEach var="unValor" items="${unaFila}">
            <td>
                ${unValor}
            </td>
        </c:forEach>
        </tr>
    </c:forEach>
</tbody>
</table>
<a href="listar.jsp">Actualizar Ciudades</a><br>
<a href="index.jsp">Volver a Inicio</a><br>
</body>
</html>

