package Servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.*;
import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class Actualizar extends HttpServlet {

    Connection conexion = null;
    Statement sentenciaSQL = null;
    ResultSet cdr = null;

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
            out.println("<title>40-BasesDatosActualizacion - Base de datos (VI)</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>40-BasesDatosActualizacion - Base de datos (VI)</h1><hr />");

            int identificador = Integer.parseInt(request.getParameter("depto"));
            String dnombre = request.getParameter("dnombre");
            String localidad = request.getParameter("localidad");
            

            boolean operar = false;
            int contador = 0;
            
            String actualizacion = "update departamentos ";

            if ((!dnombre.equals("")) || (!localidad.equals(""))) {
                
                operar = true;
                actualizacion = actualizacion + "set ";
                
                if (!dnombre.equals("")) {
                    actualizacion = actualizacion + "dnombre='" + dnombre + "' ";
                    contador++;
                }
                if (!localidad.equals("")) {
                    if(contador>0)
                        actualizacion = actualizacion + ",";
                    actualizacion = actualizacion + "loc='" + localidad + "' ";
                    contador++;
                }
                
                
                actualizacion = actualizacion + " where dept_no = "+identificador+" ";
            }

            if(operar){
                sentenciaSQL.executeUpdate(actualizacion);    
                out.println("<h2>Actualización realizada</h2>");
            } else {
                out.println("<h2>No se realizará ninguna operación</h2>");
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

    @Override
    public void init(ServletConfig config) throws ServletException {
        super.init(config);
        try {
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            String url_BD = "jdbc:mysql://localhost:3306/joseluis";
            String usuario_BD = "joseluis";
            String clave_BD = "joseluis";
            conexion = java.sql.DriverManager.getConnection(url_BD, usuario_BD, clave_BD);
            sentenciaSQL = conexion.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE, ResultSet.CONCUR_UPDATABLE);
        } catch (ClassNotFoundException e) {
        } catch (InstantiationException e) {
        } catch (IllegalAccessException e) {
        } catch (SQLException e) {
        }
    }

    @Override
    public void destroy() {
        try {
            if (cdr != null) {
                cdr.close();
            }
            if (sentenciaSQL != null) {
                sentenciaSQL.close();
            }
            if (conexion != null) {
                conexion.close();
            }
        } catch (SQLException e) {
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
