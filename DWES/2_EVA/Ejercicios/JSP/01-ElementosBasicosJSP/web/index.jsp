
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        <title>01-ElementosBasicosJSP - Elementos básicos en JSP</title>
    </head>
    <body>
        <h1>01-ElementosBasicosJSP - Elementos básicos en JSP</h1>
        <hr />
        
        <%-- Comentario en JSP --%>
        
        <%-- DECLARACIÓN --%>
        <%! int a=2,b=3; %>
        
        <%-- EXPRESIÓN --%>
        <br /><br />El valor de a es: <%=a %><br />
        
        <%-- CÓDIGO --%>
        <% for(int k=0;k<5;k++){ %>
        <h2>Cabecera</h2> 
        <% } %>
    </body>
</html>

