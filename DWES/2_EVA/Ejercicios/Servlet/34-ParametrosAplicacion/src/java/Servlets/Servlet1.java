package Servlets;

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class Servlet1 extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        try {
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<link rel=\"stylesheet\" type=\"text/css\" href=\"estilos/estilos.css\">");
            out.println("<title>34-ParametrosAplicacion - Parámetros de inicialización de la aplicación (web.xml)</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>34-ParametrosAplicacion - Parámetros de inicialización de la aplicación (web.xml)</h1><h2>Página 1 (Servlet1)</h2><hr />");

            out.println("<h3>Parámetro de inicialización de la aplicación: <span style='color=blue'>" + getServletContext().getInitParameter("parametroAplicacion") + "</span></h3>");
            out.println("<h3>Parámetro de inicialización del Servlet1: <span style='color=blue'>" + getInitParameter("parametroServlet1") + "</span></h3>");
            out.println("<h3>Parámetro de inicialización del Servlet2: <span style='color=blue'>" + getInitParameter("parametroServlet2") + "</span></h3>");

            out.println("<hr /><a href='" + request.getContextPath() + "/index.jsp'>Inicio</a>");
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
