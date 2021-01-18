package Servlets;

import Clases.Cancelar;
import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

public class Servlet2 extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        try {
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<link rel=\"stylesheet\" type=\"text/css\" href=\"estilos/estilos.css\">");
            out.println("<title>30-SesionesCancelacionAutomaticaReal - Cancelación automática de sesiones real</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>30-SesionesCancelacionAutomaticaReal - Cancelación automática de sesiones real</h1><hr />");
            out.println("<h1>Página 2</h1>");

            HttpSession sesion = request.getSession();

            if (Cancelar.comprobar_tiempos(sesion)) {
                //LA PÁGINA SE CANCELA
                out.println("<h3 style=\"color:red\">Sesión cancelada</h3>");
            } else {
                //SE MUESTRA EL CONTENIDO NORMAL DE LA PÁGINA
                out.println("Identificador de sesión: " + sesion.getId());
                out.println("<br /><br /><a href=\"/30-SesionesCancelacionAutomaticaReal/Servlet1\">Ir a página 1</a>");
            }

            out.println("<hr /><br /><a href=\"/30-SesionesCancelacionAutomaticaReal/Desconectar\">Desconectar</a>");
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
