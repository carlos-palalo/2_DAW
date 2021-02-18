package Servlets;


import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.Cookie;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class Servlet extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        try {
            out.println("<html>");
            out.println("<head>");
            out.println("<link rel=\"stylesheet\" type=\"text/css\" href=\"estilos/estilos.css\">");
            out.println("<title>13-CookiesBanco - Banco</title>");  
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>13-CookiesBanco - Banco</h1><hr />");
            
            //LEEMOS LA COOKIE Y LA ALMACENAMOS EN LA VARIABLE VALOR
            Integer saldo = new Integer(0);
            String valor = null;
            Cookie cookies[] = request.getCookies();
            if(cookies!=null){
            for(int i=0;i<cookies.length;i++){
                if(cookies[i].getName().equals("cookiesaldo"))
                    valor = cookies[i].getValue();
            }}

            if(valor==null){
                Cookie miCookie = new Cookie("cookiesaldo","0");
                miCookie.setMaxAge(60*60*24*365);
                response.addCookie(miCookie);
            }
            else
                saldo = Integer.parseInt(valor);

            String op = request.getParameter("operacion");
            
            int cant=0;
            String p_cantidad =request.getParameter("cantidad");
            if(!p_cantidad.equals(""))
                cant = Integer.parseInt(p_cantidad);

            out.println("<br />El saldo anterior era de <span style='color:blue'>"+saldo+" </span>euros.");
            if(op.equals("Ingresar")){
                out.println("<br />Se han ingresado <span style='color:blue'>"+cant+" </span>euros.");
                saldo = saldo + cant;
                out.println("<br />El nuevo saldo es de <span style='color:blue'>"+saldo+" </span>euros.");
            }
            if(op.equals("Sacar")){
                out.println("<br />Se han sacado <span style='color:blue'>"+cant+" </span>euros.");
                saldo = saldo - cant;
                out.println("<br />El nuevo saldo es de <span style='color:blue'> "+saldo+" </span>euros.");
            }
            if(op.equals("Ver"))
                out.println("<br />No se ha realizado ninguna operación.");
            

            //ACTUALIZAMOS EL SALDO
            Cookie miCookie = new Cookie("cookiesaldo",saldo.toString());
            miCookie.setMaxAge(60*60*24*365);
            response.addCookie(miCookie);
            
            out.println("<hr /><a href=\"/13-CookiesBanco/index.jsp\">Volver</a>");
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
