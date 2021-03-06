/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Servlets;

import MisClases.*;

import java.io.*;
import java.util.*;
import javax.servlet.*;
import javax.servlet.http.*;

/**
 *
 * @author daw
 */
public class Controlador extends HttpServlet {

    /**
     *
     * @param request
     * @param response
     * @throws ServletException
     * @throws IOException
     */
    @Override
    public void service(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        //parámetro acción, se obtiene de la URL de index.html, puede ser 'alta' o 'listado'
        String op = request.getParameter("accion");
        //Si se ha pulsado en alta de departameno se visualiza la pantalla de alta

        switch (op) {
            case "consulta":
                OperacionesBD operBD = new OperacionesBD();
                ArrayList lista = operBD.listar();
                request.setAttribute("empleados", lista);
                RequestDispatcher rd = request.getRequestDispatcher("/consulta.jsp");
                rd.forward(request, response);
                break;
            case "contador":
                OperacionesBD contBD = new OperacionesBD();
                ArrayList contLista = contBD.count();
                request.setAttribute("departamentos", contLista);
                RequestDispatcher rdCont = request.getRequestDispatcher("/contador.jsp");
                rdCont.forward(request, response);
                break;
            case "contadortodos":
                OperacionesBD contAllBD = new OperacionesBD();
                ArrayList contAllLista = contAllBD.countAll();
                request.setAttribute("departamentos", contAllLista);
                RequestDispatcher rdContAll = request.getRequestDispatcher("/contadortodos.jsp");
                rdContAll.forward(request, response);
                break;
        }
    }
} //fin de la clase Controlador
