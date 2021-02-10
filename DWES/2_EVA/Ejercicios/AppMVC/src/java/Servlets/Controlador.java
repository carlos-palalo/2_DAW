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
            case "alta":
                response.sendRedirect("alta.jsp");
                break;
            case "baja":
                response.sendRedirect("baja.jsp");
                break;
            case "modificar":
                response.sendRedirect("modificar.jsp");
                break;
            case "insertar":
                Departamento dep = (Departamento) request.getAttribute("depart"); //obtener deps
                OperacionesBD operBD = new OperacionesBD();
                operBD.insertaDepartamento(dep); //se insertan en tabla departamentos
                response.sendRedirect("index.html"); //se muestra la página inicial
                break;
            case "eliminar":
                Departamento depDelete = (Departamento) request.getAttribute("depart");
                OperacionesBD delBD = new OperacionesBD();
                delBD.eliminarDepartamento(depDelete);
                response.sendRedirect("index.html");
                break;
            case "actualizar":
                Departamento depAct = (Departamento) request.getAttribute("depart");
                OperacionesBD actBD = new OperacionesBD();
                actBD.actualizarDepartamento(depAct);
                response.sendRedirect("index.html"); 
                break;
            case "listado":
                OperacionesBD listBD = new OperacionesBD();
                ArrayList lista = listBD.listarDep(); //se cargan los datos de los dep
                request.setAttribute("departamentos", lista); //se preparan para enviar al jsp
                RequestDispatcher rd = request.getRequestDispatcher("/listado.jsp");
                rd.forward(request, response);
                break;
        }
    }
} //fin de la clase Controlador
