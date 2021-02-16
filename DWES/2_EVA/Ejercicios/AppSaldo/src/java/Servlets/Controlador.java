/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Servlet;

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.Cookie;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author daw
 */
public class Controlador extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {

        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        try {
            out.println("<html>");
            out.println("<head>");
            out.println("<link rel=\"stylesheet\" type=\"text/css\" href=\"estilos/estilos.css\">");
            out.println("<title>APP Saldo</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>APP Saldo</h1><hr>");
            /*
            Cookie cookies[] = request.getCookies();
            if (cookies == null) {
                out.println("<h3>No hay cookies<h3>");
            } else {
                boolean flag = false;
                for (int i = 0; i < cookies.length; i++) {
                    String n = cookies[i].getName();
                    String v = cookies[i].getValue();
                    if (n.equals("saldo")) {
                        out.println("<h3>Cookie: <i>" + n + " - " + v + "</i></h3>");
                    }
                }
                if (!flag) {
                    Cookie micookie = new Cookie("saldo", "0");
                    response.addCookie(micookie);
                } else {
                    String cantidad = request.getParameter("cantidad");
                    String op = request.getParameter("op");

                    if (cantidad.equals("admin") && op.equals("1234")) {
                        out.println("<h2>Conectado correctamente</h2>");
                    } else {
                        out.println("<h2>Usuario o clave incorrectas</h2>");
                    }
                }
            }*/
            out.println("</body>");
            out.println("</html>");
        } finally {
            out.close();
        }
    }
}
