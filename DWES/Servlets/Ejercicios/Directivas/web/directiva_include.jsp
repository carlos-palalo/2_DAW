<%-- 
    Document   : directiva_include
    Created on : 24-ene-2018, 20:12:03
    Author     : jose luis
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>Directivas - Directiva include</title>
    </head>
    <body>
        <h1>Directivas - Directiva include</h1>
        <hr />
        
        <br />
        <%@include file="inclusion.jsp" %>
        <br /><br />
        <%@include file="inclusion.html" %>
    </body>
</html>

