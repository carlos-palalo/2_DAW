package Servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.*;
import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class Eliminar extends HttpServlet {

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
            
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<link rel=\"stylesheet\" type=\"text/css\" href=\"estilos/estilos.css\">");
            out.println("<title>39-BasesDatosEliminacion - Base de datos (V)</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>39-BasesDatosEliminacion - Base de datos (V)</h1><hr />");

            int contador = 0;
            String valores[] = request.getParameterValues("depto");
            for (contador = 0; contador < valores.length; contador++) {
                String eliminacion = "delete from departamentos where dept_no = " + valores[contador];
                sentenciaSQL.executeUpdate(eliminacion);
            }

            if (contador > 0) {
                out.println("<h2>Eliminación realizada</h2>");
                out.println("Departamentos eliminados: " + contador);
            } else {
                out.println("<h2>No se eliminaron departamentos</h2>");
            }

            out.println("<hr /><a href='" + getServletContext().getContextPath() + "/index.jsp'>Inicio</a>");
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
