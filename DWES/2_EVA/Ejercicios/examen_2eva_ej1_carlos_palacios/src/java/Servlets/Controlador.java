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

        if(op.equals("listado")){
            OperacionesBD operBD = new OperacionesBD();
                ArrayList lista = operBD.listarClientes(); //se cargan los datos de los dep
                request.setAttribute("clientes", lista); //se preparan para enviar al jsp
                RequestDispatcher rd = request.getRequestDispatcher("/listado.jsp");
                rd.forward(request, response);
        }
    }
} //fin de la clase Controlador