package Servlets;


import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.Cookie;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class ContadorAccesos extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        try {

            out.println("<html>");
            out.println("<head>");
            out.println("<link rel=\"stylesheet\" type=\"text/css\" href=\"estilos/estilos.css\">");
            out.println("<title>12-CookiesContador - Contador de accesos mediante una cookie</title>");  
            out.println("</head>");
            out.println("<body>");
            
            //LEEMOS LA COOKIE Y LA ALMACENAMOS EN LA VARIABLE VALOR
            String valor = null;
            Cookie cookies[] = request.getCookies();
            if(cookies!=null){
            for(int i=0;i<cookies.length;i++){
                if(cookies[i].getName().equals("cuenta"))
                    valor = cookies[i].getValue();
            }}

            //DEPENDIENDO DE LA LECTURA ANTERIOR PONEMOS EL NUEVO VALOR
            //A LA COOKIE QUE SERÁ 1 SI LA COOKIE NO EXISTÍA O UN VALOR
            //INCREMENTADO EN UNO SI YA EXISTÍA
            Integer contador = null;
            if(valor==null)//No hay cookie
                contador = new Integer(1);
            else//Hay cookie
                contador = new Integer(Integer.parseInt(valor)+1);

            //ENVIAR COOKIE
            Cookie miCookie = new Cookie("cuenta",contador.toString());
            miCookie.setMaxAge(60*60*24*365);
            response.addCookie(miCookie);

            out.println("<h1>12-CookiesContador - Contador de accesos mediante una cookie</h1><hr />");
            out.println("<h2>Número de accesos: <span style='color:blue'>" + contador.toString() + "</span></h2>");
            out.println("<hr /><a href=\"/12-CookiesContador/index.jsp\">Volver</a>");
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
