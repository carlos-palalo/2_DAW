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

            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<link rel=\"stylesheet\" type=\"text/css\" href=\"estilos/estilos.css\">");
            out.println("<title>17-VariosIdiomas - Leer el idioma del navegador</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>17-VariosIdiomas - Leer el idioma del navegador</h1><hr />");

            Locale localePrincipal = request.getLocale();
            out.println("<h2>Locale principal</h2>");
            out.println("<br />Pais: " + localePrincipal.getCountry());
            out.println("<br />Idioma: " + localePrincipal.getLanguage());
            out.println("<br />Pais (3 caracteres): " + localePrincipal.getISO3Country());
            out.println("<br />Idioma (3 caracteres): " + localePrincipal.getISO3Language());

            Enumeration enumeracionLocale = request.getLocales();
            out.println("<h2>Locales almacenados</h2>");
            while (enumeracionLocale.hasMoreElements()) {
                Locale localeTemporal = (Locale) enumeracionLocale.nextElement();
                out.println("<br />Pais: " + localeTemporal.getCountry());
                out.println("<br />Idioma: " + localeTemporal.getLanguage());
                out.println("<br />Pais (3 caracteres): " + localeTemporal.getISO3Country());
                out.println("<br />Idioma (3 caracteres): " + localeTemporal.getISO3Language());
                out.println("<hr />");
            }

            out.println("<h2>Contenido en idioma dependiendo del navegador</h2>");
            
            RequestDispatcher rd = null;
            Locale idiomaPagina;
            if(localePrincipal.getLanguage().equals("es")){
                idiomaPagina = new Locale("es","ES");
                response.setLocale(idiomaPagina);
                rd = getServletContext().getRequestDispatcher(("/spanish.html"));
                rd.include(request, response);
            }
            
            if(localePrincipal.getLanguage().equals("en")){
                idiomaPagina = new Locale("en","EN");
                response.setLocale(idiomaPagina);
                rd = getServletContext().getRequestDispatcher(("/english.html"));
                rd.include(request, response);
            }
            
            
            out.println("<hr /><a href='/17-VariosIdiomas/index.jsp'>Volver</a>");
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
