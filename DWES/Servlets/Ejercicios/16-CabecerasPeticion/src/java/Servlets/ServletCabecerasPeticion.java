package Servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.Enumeration;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class ServletCabecerasPeticion extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        try {
            
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<link rel=\"stylesheet\" type=\"text/css\" href=\"estilos/estilos.css\">");
            out.println("<title>16-CabecerasPeticion - Lectura de las cabeceras de la petición</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>16-CabecerasPeticion - Lectura de las cabeceras de la petición</h1><hr />");

            //SE PUEDE USAR EL MÉTODO REQUEST.GETHEADER PASANDO COMO PARÁMETRO EL NOMBRE DE LA CABECERA
            String nombreCabecera;
            Enumeration nombresCabeceras;
            Enumeration valoresCabeceras;
            nombresCabeceras = request.getHeaderNames();
            
            out.println("<table border=\"1\" cellpadding=\"10\">");
            out.println("<tr><td colspan='2'><b>CABECERAS DE PETICIÓN</b></td></tr>");
            out.println("<tr><td><b>Cabecera</b></td><td><b>Valor</b></td></tr>");
            
            while (nombresCabeceras.hasMoreElements()) {
                nombreCabecera = (String) nombresCabeceras.nextElement();
                out.println("<tr>");
                
                out.println("<td>" + nombreCabecera + "</td>");
                valoresCabeceras = request.getHeaders(nombreCabecera);
                while (valoresCabeceras.hasMoreElements()) {
                    out.println("<td>"
                            + valoresCabeceras.nextElement() + "</td>");
                }
                
                out.println("</tr>");
            }
            out.println("</table>");

            out.println("<hr /><a href='/16-CabecerasPeticion/index.jsp'>Volver</a>");
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
