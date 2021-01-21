package Servlets;

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.Cookie;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class Leer extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        try {

            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<link rel=\"stylesheet\" type=\"text/css\" href=\"estilos/estilos.css\">");
            out.println("<title>11-CookiesBasico - Ejemplo básico de cookies: mandar y leer</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>11-CookiesBasico - Ejemplo básico de cookies: mandar y leer</h1><hr />");

            out.println("<table border='2'>");
            out.println("<tr>");
            out.println("<td colspan='2'><b>COOKIES</b></td>");
            out.println("</tr>");
            out.println("<tr>");
            out.println("<td><b>Nombre</b></td>");
            out.println("<td><b>Valor</b></td>");
            out.println("</tr>");

            Cookie[] listaCookies = request.getCookies();
            if (listaCookies != null) {
                for (int i = 0; i < listaCookies.length; i++) {
                    out.println("<tr>");

                    out.println("<td>" + listaCookies[i].getName() + "</td>");
                    out.println("<td>" + listaCookies[i].getValue() + "</td>");

                    out.println("</tr>");
                }
            }

            out.println("</table>");

            out.println("<hr />");
            out.println("<a href='/11-CookiesBasico/index.jsp'>Volver</a>");
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
