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

            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<link rel=\"stylesheet\" type=\"text/css\" href=\"estilos/estilos.css\">");
            out.println("<title>14-CookiesLogin - Autenticación con cookies</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>14-CookiesLogin - Autenticación con cookies</h1><hr />");

            //DEFINICIÓN DE OBJETOS Y OBTENCIÓN DE PARÁMETROS
            Cookie cUsuario, cClave;

            String _tipologin = null;
            if (request.getParameter("tipologin") != null) {
                _tipologin = request.getParameter("tipologin");
            }

            String _usuario = null;
            if (request.getParameter("usuario") != null) {
                _usuario = request.getParameter("usuario");
            }

            String _clave = null;
            if (request.getParameter("clave") != null) {
                _clave = request.getParameter("clave");
            }
            
            String _recordarme = "no";
            if (request.getParameter("recordarme") != null) {
                _recordarme = request.getParameter("recordarme");
            }


            //SE INTENTA CONECTAR MEDIANTE PARÁMETROS
            if (_tipologin.equals("usuarioyclave")) {
                if (_usuario.equals("admin") && _clave.equals("1234")) {
                    out.println("<h2 style='color:blue'>USUARIO CORRECTO</h2>");
                    if (_recordarme != null && _recordarme.equals("si")) {
                        cUsuario = new Cookie("usuario", _usuario);
                        cUsuario.setMaxAge(24 * 60 * 60 * 7);
                        response.addCookie(cUsuario);
                        cClave = new Cookie("clave", _clave);
                        cClave.setMaxAge(24 * 60 * 60 * 7);
                        response.addCookie(cClave);
                    }
                } else {
                    out.println("<h2 style='color:red'>USUARIO INCORRECTO</h2>");
                }
            }


            //SE INTENTA CONECTAR MEDIANTE COOKIES
            if (_tipologin.equals("cookies")) {
                //OBTENCIÓN DE LAS COOKIES
                String user = null, password = null;
                Cookie[] listaCookies = request.getCookies();
                for (int i = 0; i < listaCookies.length; i++) {
                    if (listaCookies[i].getName().equals("usuario")) {
                        user = listaCookies[i].getValue();
                    }
                    if (listaCookies[i].getName().equals("clave")) {
                        password = listaCookies[i].getValue();
                    }
                }
                if (user != null && password != null && user.equals("admin") && password.equals("1234")) {
                    out.println("<h2 style='color:blue'>USUARIO CORRECTO (Cookies)</h2>");
                } else {
                    out.println("<h2 style='color:red'>USUARIO INCORRECTO</h2>");
                }
            }

            out.println("<hr /><a href=/14-CookiesLogin/index.jsp>Volver</a>");
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
