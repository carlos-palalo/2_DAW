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

    public void service(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        //parámetro acción, se obtiene de la URL de index.html, puede ser 'alta' o 'listado'
        String op = request.getParameter("accion");
        //Si se ha pulsado en alta de departameno se visualiza la pantalla de alta
        if (op.equals("alta")) {
            response.sendRedirect("alta.jsp");
        }
        //Si se ha pulsado en listado, primero se cargan los datos de departamentos en una lista y luego se envian a listado.jsp
        if (op.equals("listado")) {
            OperacionesBD operBD = new OperacionesBD();
            ArrayList lista = operBD.listarDep(); //se cargan los datos de los dep
            request.setAttribute("departamentos", lista); //se preparan para enviar al jsp
            RequestDispatcher rd = request.getRequestDispatcher("/listado.jsp");
            rd.forward(request, response);
        }

        //Se insertar departamento en la tabla y luego se visualiza index.html
        if (op.equals("insertar")) {
            Departamento dep = (Departamento) request.getAttribute("depart"); //obtener deps
            OperacionesBD operBD = new OperacionesBD();
            operBD.insertaDepartamento(dep); //se insertan en tabla departamentos
            response.sendRedirect("index.html"); //se muestra la página inicial
        }
    }
} //fin de la clase Controlador
