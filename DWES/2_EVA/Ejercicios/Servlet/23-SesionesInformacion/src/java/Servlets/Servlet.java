package Servlets;


import java.io.IOException;
import java.io.PrintWriter;
import java.util.Date;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

public class Servlet extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        try {
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<link rel=\"stylesheet\" type=\"text/css\" href=\"estilos/estilos.css\">");
            out.println("<title>23-SesionesInformación - Información sobre las sesiones</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>23-SesionesInformación - Información sobre las sesiones</h1><hr />");
           
            HttpSession objSesion = request.getSession();

            String idSesion = objSesion.getId();
            out.println("<br /><br />Identificador: <b>"+idSesion+"</b>");

            long fecha_creacion = objSesion.getCreationTime();
            out.println("<br /><br />Fecha de creación: <b>"+new Date(fecha_creacion).toString()+"</b>");

            long fecha_ultimo_acceso = objSesion.getLastAccessedTime();
            out.println("<br /><br />Último acceso: <b>"+new Date(fecha_ultimo_acceso).toString()+"</b>");
            
            long diferencia;
            diferencia=fecha_ultimo_acceso-fecha_creacion;
            
            out.println("<br /><br />Tiempo de sesión: <b>"+diferencia+" milisegundos</b>");

            out.println("<hr /><a href='/23-SesionesInformacion/index.jsp'>Inicio</body>");
            out.println("</body>");
            out.println("</html>");
        } finally {            
            out.close();
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /** 
     * Handles the HTTP <code>GET</code> method.
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
     * Handles the HTTP <code>POST</code> method.
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
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>
}
