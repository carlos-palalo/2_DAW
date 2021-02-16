/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Servlets;

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
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>APP Saldo</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>APP Saldo</h1><hr>");

            Cookie cookies[] = request.getCookies();
            if (cookies == null) {
                out.println("<h3>No hay cookies<h3>");
            } else {
                boolean flag = false;
                for (int i = 0; i < cookies.length; i++) {
                    String n = cookies[i].getName();
                    String v = cookies[i].getValue();
                    //float saldo = Float.parseFloat(v);
                    Double cantidad = 0.0;
                    if (request.getParameter("cantidad") != "") {
                        cantidad = Double.parseDouble(request.getParameter("cantidad"));
                    }
                    if (n.equals("saldo")) {
                        out.println("<p>El saldo anterior era de <b>" + v + " €</b>");
                        Double saldo = Double.parseDouble(v);
                        switch (request.getParameter("op")) {
                            case "ingreso":
                                out.println("<p>Se han ingresado <b>" + cantidad + " €</b></p>");
                                saldo += cantidad;
                                out.println("<p>El nuevo saldo es de <b>" + saldo + " €</b></p>");
                                break;
                            case "sacar":
                                out.println("<p>Se han sacado <b>" + cantidad + " €</b></p>");
                                saldo -= cantidad;
                                out.println("<p>El nuevo saldo es de <b>" + saldo + " €</b></p>");
                                break;
                            case "ver":
                                out.println("<p>No se ha realizado ninguna operación</p>");
                                break;
                        }
                        Cookie miCookie = new Cookie(n, Double.toString(saldo));
                        miCookie.setMaxAge(60 * 60 * 24 * 365);
                        response.addCookie(miCookie);
                    }
                }
                out.println("<hr /><a href='/AppSaldo/index.jsp'>Volver</a>");
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
     * Handles the HTTP <code>POST</code> method.
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
