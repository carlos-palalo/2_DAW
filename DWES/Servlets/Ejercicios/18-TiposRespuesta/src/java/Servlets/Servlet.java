package Servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.Enumeration;
import java.util.Locale;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class Servlet extends HttpServlet {

    protected void processRequest(HttpServletRequest request,
            HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        try {
            int _tiporespuesta = Integer.parseInt(request.getParameter("tiporespuesta"));

            switch (_tiporespuesta) {
                case 200:
                    response.setStatus(HttpServletResponse.SC_OK);
                    out.println("<!DOCTYPE html>");
                    out.println("<html>");
                    out.println("<head>");
                    out.println("<link rel=\"stylesheet\" type=\"text/css\" href=\"estilos/estilos.css\">");
                    out.println("<title>18-TiposRespuesta - Generar distintos tipos de respuesta</title>");
                    out.println("</head>");
                    out.println("<body>");
                    out.println("<h1>18-TiposRespuesta - Generar distintos tipos de respuesta</h1><hr />");
                    out.println("<h2>Respuesta OK</h2>");
                    out.println("<hr /><a href='/18-TiposRespuesta/index.jsp'>Volver</a>");
                    out.println("</body>");
                    out.println("</html>");
                    break;
                case 401:
                    //response.setHeader("WWW-Authenticate", "BASIC");
                    //response.setStatus(HttpServletResponse.SC_UNAUTHORIZED);
                    response.sendError(HttpServletResponse.SC_UNAUTHORIZED,"No puedes entrar sin identificarte");
                    break;
                case 403:
                    response.setStatus(HttpServletResponse.SC_FORBIDDEN);
                    response.sendError(HttpServletResponse.SC_FORBIDDEN,"Está prohibido acceder al recurso");
                    break;
                case 404:
                    response.setStatus(HttpServletResponse.SC_NOT_FOUND);
                    response.sendError(HttpServletResponse.SC_NOT_FOUND,"No encontrado");
                    break;
                case 503:
                    response.setStatus(HttpServletResponse.SC_SERVICE_UNAVAILABLE);
                    response.sendError(HttpServletResponse.SC_SERVICE_UNAVAILABLE,"Servicio actualmente no disponible");
                    break;
                case 505:
                    response.setStatus(HttpServletResponse.SC_HTTP_VERSION_NOT_SUPPORTED);
                    response.sendError(HttpServletResponse.SC_HTTP_VERSION_NOT_SUPPORTED,"Se se conoce la versión del protocolo HTTP");
                    break;

            }
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
