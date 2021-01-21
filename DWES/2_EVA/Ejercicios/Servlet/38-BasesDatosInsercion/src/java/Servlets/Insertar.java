 package Servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.*;
import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class Insertar extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        try {

            Connection conexion = null;
            Statement sentenciaSQL = null;
            PreparedStatement sentenciaPreparada = null;
            ResultSet cdr = null;
            boolean insertada = false;
            String cadena_error = "";
            String insercion = "";

            Class.forName("com.mysql.jdbc.Driver").newInstance();
            String url_BD = getServletContext().getInitParameter("basedatos");
            String usuario_BD = getServletContext().getInitParameter("usuario");
            String clave_BD = getServletContext().getInitParameter("clave");
            conexion = java.sql.DriverManager.getConnection(url_BD, usuario_BD, clave_BD);
            sentenciaSQL = conexion.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE, ResultSet.CONCUR_UPDATABLE);

            //RECUPERAMOS LOS PARAMETROS
            
            /*
            int id = -1;
            if (!request.getParameter("Id").equals("")) {
                id = Integer.parseInt(request.getParameter("Id"));
            }
            */
            int ndep = Integer.parseInt(request.getParameter("ndep"));
            String dnombre = request.getParameter("dnombre");
            String localidad = request.getParameter("localidad");
            

            //SI SE INTRODUCE EL NºDEPTO MANUALMENTE
            if (!request.getParameter("ndep").equals("")) {
                String comprobar = "select count(*) from departamentos where dept_no=" + ndep;
                cdr = sentenciaSQL.executeQuery(comprobar);
                cdr.next();
                if (cdr.getInt(1) > 0) {
                    cadena_error = "<h2 style='color:red'>El Nº depto ya existe</h2>";
                } else {
                    insercion = "insert into departamentos values (?,?,?)";
                    sentenciaPreparada = conexion.prepareStatement(insercion);
                    sentenciaPreparada.setInt(1, ndep);
                    sentenciaPreparada.setString(2, dnombre);
                    sentenciaPreparada.setString(3, localidad);
                    insertada = true;
                    sentenciaPreparada.executeUpdate();
                }
            } else {//SI EL Nº DEPTO SE INSERTA AUTOMÁTICAMENTE
                insercion = "insert into departamantos (ndep,dnombre,localidad) values (?,?,?)";
                sentenciaPreparada = conexion.prepareStatement(insercion);
                sentenciaPreparada.setInt(1, ndep);
                sentenciaPreparada.setString(2, dnombre);
                sentenciaPreparada.setString(3, localidad);
                insertada = true;
                sentenciaPreparada.executeUpdate();
            }

            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<link rel=\"stylesheet\" type=\"text/css\" href=\"estilos/estilos.css\">");
            out.println("<title>38-BasesDatosInsercion - Base de datos (IV)</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>38-BasesDatosInsercion - Base de datos (IV)</h1><hr />");

            if (insertada) {
                out.println("<h2 style='color:blue'>Inserción realizada</h2>");
            } else {
                out.println(cadena_error);
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
