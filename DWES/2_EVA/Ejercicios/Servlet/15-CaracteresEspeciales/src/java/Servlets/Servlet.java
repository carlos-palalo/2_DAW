package Servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.net.URLEncoder;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

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
            out.println("<title>09-CaracteresEspeciales - Tratamiento de caracteres especiales</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>09-CaracteresEspeciales - Tratamiento de caracteres especiales</h1><hr />");

            out.println("<h2>Contenido de los parámetros</h2>");
            String parametro1;
            parametro1 = new String(request.getParameter("p1").getBytes("ISO-8859-1"),"UTF-8");
            String parametro2;
            parametro2 = request.getParameter("p2");

            if (parametro1 != null) {
                out.println("<br />P1: " + parametro1);
            }

            if (parametro2 != null) {
                out.println("<br />P2: " + parametro2);
            }

            out.println("<hr /><h2>Cadena URL codificada</h2>");
            
            String urlCodificada = URLEncoder.encode("luis&maría","UTF-8");
            out.println("<a href='/15-CaracteresEspeciales/Servlet?p1=v1&p2=" + urlCodificada + "'>Ejecutar mediante enlace (GET), con parámetros con URL codificada</a>");
            
            out.println("<hr /><a href='/15-CaracteresEspeciales/index.jsp'>Volver</a>");
            out.println("</body>");
            out.println("</html>");
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
