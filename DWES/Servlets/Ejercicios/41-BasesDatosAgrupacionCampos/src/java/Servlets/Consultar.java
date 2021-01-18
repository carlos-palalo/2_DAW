package Servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.*;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class Consultar extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        try {

            Connection conexion = null;
            Statement sentenciaSQL = null;
            ResultSet cdr = null;

            Class.forName("com.mysql.jdbc.Driver").newInstance();
            String url_BD = getServletContext().getInitParameter("basedatos");
            String usuario_BD = getServletContext().getInitParameter("usuario");;
            String clave_BD = getServletContext().getInitParameter("clave");;
            conexion = java.sql.DriverManager.getConnection(url_BD, usuario_BD, clave_BD);
            sentenciaSQL = conexion.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE, ResultSet.CONCUR_UPDATABLE);

            String consulta = "";

            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<link rel=\"stylesheet\" type=\"text/css\" href=\"estilos/estilos.css\">");
            out.println("<title>41-BasesDatosAgrupacionCampos - Base de datos (VII)</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>41-BasesDatosAgrupacionCampos - Base de datos (VII)</h1><hr />");

            out.println("<h2>Consultas de agrupación de campos</h2>");

            consulta = "select count(*) 'cuenta' from empleados";
            cdr = sentenciaSQL.executeQuery(consulta);
            cdr.next();
            out.println("<h3>Número total de empleados: " + cdr.getInt("cuenta") + "</h3>");

            consulta = "select max(emp_no) 'maximo' from empleados";
            cdr = sentenciaSQL.executeQuery(consulta);
            cdr.next();
            out.println("<h3>Mayor número de empleado: " + cdr.getInt("maximo") + "</h3>");

            consulta = "select min(emp_no) from empleados";
            cdr = sentenciaSQL.executeQuery(consulta);
            cdr.next();
            out.println("<h3>Menor número de empleado: " + cdr.getInt(1) + "</h3>");

            consulta = "select avg(salario) from empleados";
            cdr = sentenciaSQL.executeQuery(consulta);
            cdr.next();
            out.println("<h3>Media de salarios: " + cdr.getDouble(1) + "</h3>");

            consulta = "select sum(comision) from empleados";
            cdr = sentenciaSQL.executeQuery(consulta);
            cdr.next();
            out.println("<h3>Comisiones totales: " + cdr.getInt(1) + "</h3>");

            out.println("<h3>Número de empleados por oficio</h3>");
            consulta = "select oficio,count(*) from empleados group by oficio order by 2 desc";
            cdr = sentenciaSQL.executeQuery(consulta);
            out.println("<table border=\"2\">");
            out.println("<tr bgcolor='red'>");
            out.println("<td><b>OFICIO</b></td>");
            out.println("<td><b>TOTALES</b></td>");
            out.println("</tr>");

            int i = 0;

            while (cdr.next()) {
                if (i % 2 == 0) {
                    out.println("<tr>");
                } else {
                    out.println("<tr bgcolor='yellow'>");
                }
                i++;

                out.println("<td>");
                out.println(cdr.getString("oficio"));
                out.println("</td>");

                out.println("<td>");
                out.println(cdr.getInt(2));
                out.println("</td>");
                out.println("</tr>");
            }
            out.println("</table>");

            out.println("<hr ><a href='" + request.getContextPath() + "'>Inicio</a>");
            out.println("</body>");
            out.println("</html>");

            if (cdr != null) {
                cdr.close();
            }
            if (sentenciaSQL != null) {
                sentenciaSQL.close();
            }
            if (conexion != null) {
                conexion.close();
            }
        } catch (Exception e) {
            e.printStackTrace();
        } finally {
            out.close();
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP
     * <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP
     * <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>
}
