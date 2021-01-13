package Servlets;

import Clases.Coche;
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
            out.println("<title>24-SesionesAtributos - Atributos de sesión</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>24-SesionesAtributos - Atributos de sesión</h1><hr />");
            out.println("<h2>Página 2 - Ver atributos</h2>");

            HttpSession sesion = request.getSession(true);

            //String  at1 = sesion.getAttribute("atributo1").toString();
            String at1 = (String) sesion.getAttribute("atributo1");

            int at2 = Integer.parseInt(sesion.getAttribute("atributo2").toString());

            //int at3 = Integer.parseInt(sesion.getAttribute("atributo3").toString());
            int at3 = (Integer) sesion.getAttribute("atributo3");

            Coche miCoche = (Coche) sesion.getAttribute("atributo4");

            out.println("<br />El atributo1 es: <b>" + at1 + "</b>");
            out.println("<br />El atributo2 es: <b>" + at2 + "</b>");
            out.println("<br />El atributo3 es: <b>" + at3 + "</b>");
            out.println("<br />El atributo4 es: <b>" + miCoche.getMarca() + " - " + miCoche.getColor() + "</b>");

            out.println("<br /><br /><a href=\"/24-SesionesAtributos/Servlet1\">Ir a página 1</a>");
            
            out.println("<hr /><a href=\"/24-SesionesAtributos/index.jsp\">Inicio</a>");
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
