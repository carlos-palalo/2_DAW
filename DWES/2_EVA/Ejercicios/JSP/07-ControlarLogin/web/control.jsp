
<%! String usuarios[][] = {{"nombre1", "clave1"}, {"nombre2", "clave2"}};%>

<%
    boolean valido = false;
    
    if ((request.getParameter("nombre") != null) && (request.getParameter("pass") != null)) {
        for (int i = 0; i <= 1; i++) {
            if ((request.getParameter("nombre").equals(usuarios[i][0])) && (request.getParameter("pass").equals(usuarios[i][1]))) {
                valido = true;
            }
        }
    }
%>

<% if(!valido) { %>
<jsp:forward page="index.jsp" />
<% } else {
        String n = request.getParameter("nombre");
        %>
    <jsp:forward page="inicio.jsp">
        <jsp:param name="usuario" value="<%=n%>" />
    </jsp:forward>
<% } %>

