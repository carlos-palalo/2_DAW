package Servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.Enumeration;
import java.util.Iterator;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class ServletParametros extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        try {

            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<link rel=\"stylesheet\" type=\"text/css\" href=\"estilos/estilos.css\">");
            out.println("<title>08-Parametros - Lectura de los parámetros</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>08-Parametros - Lectura de los parámetros</h1><hr />");


            //Si la petición viene por el método GET (un enlace)
            if (request.getMethod().equals("GET")) {
                out.println("<h2>Se ha accedido al servlet desde el enlace</h2>");
                out.println("<br /><b>P1:</b> " + request.getParameter("p1"));
                out.println("<br /><b>P2:</b> " + request.getParameter("p2"));
                out.println("<br /><b>P3:</b> " + request.getParameter("p3"));
            }

            //Si la petición viene por el método POST
            if (request.getMethod().equals("POST")) {
                out.println("<h2>Se ha accedido al servlet desde el formulario</h2>");
                out.println("<br /><b>Nombre:</b> " + request.getParameter("nombre"));
                out.println("<br /><b>Apellidos:</b> " + request.getParameter("apellidos"));
                out.println("<br /><b>Edad:</b> " + request.getParameter("edad"));

                //Este parámetro puede tomar varios valores pero getParameter sólo recupera el primero
                out.println("<br /><b>Ciudad:</b> " + request.getParameter("ciudad"));
                //Solucionamos el problema con getParameterValues
                String[] ciudades = null;
                ciudades = request.getParameterValues("ciudad");
                if (ciudades != null) {
                    for (int i = 0; i < ciudades.length; i++) {
                        out.println("<br /><b>Ciudad Nº" + (i+1) + ":</b> " + ciudades[i]);
                    }
                }
            }
            
            out.println("<br /><hr /><br />");
            
            //No es necesario conocer los nombre de los parámetros para recuperarlos
            out.println("<h2>Obtener nombres y valores de los parámetros</h2>");
            String nombre_par;
            Enumeration parametros = request.getParameterNames();
            while(parametros.hasMoreElements()){
                nombre_par = parametros.nextElement().toString();
                out.println("<br /><b>Parámetro:</b> " + nombre_par);
                out.println(" - <b>Valor:</b>: " +request.getParameter(nombre_par));
            }
            
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
