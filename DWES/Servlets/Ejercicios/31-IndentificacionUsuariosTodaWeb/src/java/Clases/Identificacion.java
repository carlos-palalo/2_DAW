package Clases;

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.*;
import javax.servlet.http.*;

public class Identificacion {

    public static boolean comprobar_identidad(HttpSession s) {

        String[][] LISTAusuarios = {
            {"usuario1", "clave1"},
            {"usuario2", "clave2"},
            {"usuario3", "clave3"},
            {"usuario4", "clave4"},
            {"usuario5", "clave5"}
        };


        Usuario objetoUser = (Usuario) s.getAttribute("us");

        Boolean flag = false;
        if (objetoUser != null) {
            for (int i = 0; i < LISTAusuarios.length; i++) {
                if (objetoUser.usuario.equals(LISTAusuarios[i][0]) && objetoUser.clave.equals(LISTAusuarios[i][1])) {
                    flag = true;
                }
            }
        }

        return flag;

    }

    public static void pintar_identidad(HttpServletRequest request, HttpServletResponse response, boolean flag)
            throws ServletException, IOException {
        HttpSession objSesion = request.getSession();
        Usuario objetoUser = (Usuario) objSesion.getAttribute("us");
        PrintWriter out = response.getWriter();
        if (flag) {
            out.println("<div style=\"background-color:green;color:white\">Usuario conectado: <b><i>" + objetoUser.usuario + "</i></b></div>");
        } else {
            out.println("<div style=\"background-color:red;color:white\">Usuario conectado: <b><i>NINGUNO</i></b></div>");
        }
    }
}
