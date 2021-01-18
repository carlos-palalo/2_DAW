package Servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class FormEliminar extends HttpServlet {

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
            String usuario_BD = getServletContext().getInitParameter("usuario");
            String clave_BD = getServletContext().getInitParameter("clave");
            conexion = java.sql.DriverManager.getConnection(url_BD, usuario_BD, clave_BD);
            sentenciaSQL = conexion.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE, ResultSet.CONCUR_UPDATABLE);

            String consulta = "select * from departamentos";
            cdr = sentenciaSQL.executeQuery(consulta);

            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<link rel=\"stylesheet\" type=\"text/css\" href=\"estilos/estilos.css\">");
            out.println("<title>39-BasesDatosEliminacion - Base de datos (V)</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>39-BasesDatosEliminacion - Base de datos (V)</h1>");
            out.println("<h2>Formulacio de eliminación</h2>");

            cdr = sentenciaSQL.executeQuery(consulta);
            out.println("<form action='/39-BasesDatosEliminacion/Eliminar' method='post'>");
            out.println("<select name='depto' size='8' multiple='multiple'>");
            while (cdr.next()) {
                out.println("<option value='" + cdr.getInt("dept_no") + "'>" + cdr.getString("dnombre") + "</option>");
            }
            out.println("</select>");
            out.println("<input type='submit' value='Eliminar' />");
            out.println("</form>");

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
