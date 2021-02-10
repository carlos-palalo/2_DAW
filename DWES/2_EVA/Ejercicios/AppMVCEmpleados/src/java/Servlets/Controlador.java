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
            case "listado":
                OperacionesBD operBD = new OperacionesBD();
                ArrayList lista = operBD.listarEmp(); //se cargan los datos de los dep
                request.setAttribute("empleados", lista); //se preparan para enviar al jsp
                RequestDispatcher rd = request.getRequestDispatcher("/listado.jsp");
                rd.forward(request, response);
                break;
            case "insertar":
                Empleado emp = (Empleado) request.getAttribute("emple"); //obtener deps
                OperacionesBD insBD = new OperacionesBD();
                insBD.insertaEmpleado(emp); //se insertan en tabla empleados
                response.sendRedirect("index.html"); //se muestra la página inicial
                break;
            case "actualizar":
                Empleado empAct = (Empleado) request.getAttribute("emple");
                OperacionesBD actBD = new OperacionesBD();
                actBD.actualizarEmpleado(empAct);
                response.sendRedirect("index.html");
                break;
            case "eliminar":
                Empleado empDel = (Empleado) request.getAttribute("emple");
                OperacionesBD delBD = new OperacionesBD();
                delBD.eliminarEmpleado(empDel);
                response.sendRedirect("index.html");
                break;
        }
    }
} //fin de la clase Controlador
