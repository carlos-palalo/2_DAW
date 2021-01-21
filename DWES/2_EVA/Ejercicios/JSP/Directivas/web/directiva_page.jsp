<%-- 
    Document   : directiva_page
    Created on : 24-ene-2018, 20:15:03
    Author     : jose luis
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="java.util.Date"%>
<%@page errorPage="errores.jsp"%>
<%@page language="java" %>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>Directivas - Directiva Page</title>
    </head>
    <body>
        <h1>Directivas - Directiva Page</h1>
        <hr />
        
        <!-- DIRECTIVA import -->
        <!-- Es necesaria la importación de la fecha -->
        <%! Date d = new Date(); %>
        
        
        <!-- DIRECTIVA  pageError -->
        <!-- Se irá a la página de errores si encuentra algún error -->
        <h2 style="color:blue">Página generada sin errores</h2>
        <%
            int a;
            //a=4/1;
            a=4/0;  //Descomentar esta sentencia para generar un error
                     // y poder ir a la página de errores
        %>
    </body>
</html>
