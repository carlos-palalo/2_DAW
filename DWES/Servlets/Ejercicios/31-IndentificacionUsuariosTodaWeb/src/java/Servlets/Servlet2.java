package Servlets;


import Clases.Identificacion;
import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.*;
import javax.servlet.http.*;

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
            out.println("<title>31-IndentificacionUsuariosTodaWeb - Usar un objeto usuario como variable de sesión - Inicio</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>27-IndentificacionObjetoUsuarioTodaWeb - Usar un objeto usuario como variable de sesión</h1><h2>Página 2</h2><hr />");

            HttpSession sesion = request.getSession();
            boolean valido = Identificacion.comprobar_identidad(sesion);

            if(valido){
                Identificacion.pintar_identidad(request,response,true);
                out.println("<h3>Contenido de la página 2</h3>");
                out.println("<br /><a href=\"" + request.getContextPath()+ "/Servlet1\">Página 1</a>");
                out.println("<br /><a href=\"" + request.getContextPath()+ "/Servlet2\">Página 2</a>");
                out.println("<br /><a href=\"" + request.getContextPath()+ "/Servlet3\">Página 3</a>");
            }
            else {
                Identificacion.pintar_identidad(request,response,false);
                out.println("<h3>Usuario no válido</h3>");
                out.println("<br /><a href=\"" + request.getContextPath()+ "/index.jsp\">Pulse aquí para volverse a conectar...</a>");
            }

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
