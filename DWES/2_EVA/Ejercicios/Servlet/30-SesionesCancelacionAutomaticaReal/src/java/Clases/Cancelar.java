package Clases;


import java.util.Date;
import javax.servlet.http.HttpSession;

public class Cancelar {

    public static boolean comprobar_tiempos(HttpSession sesion) {

        Date transcurrido = new Date(System.currentTimeMillis() - 5 * 60 * 1000);
        Date inactividad = new Date(System.currentTimeMillis() - 1 * 60 * 1000);
        Date creada = new Date(sesion.getCreationTime());
        Date accedida = new Date(sesion.getLastAccessedTime());
        boolean cancelacion = false;

        if (creada.before(transcurrido) || accedida.before(inactividad)) {
            sesion.invalidate();
            cancelacion = true;
        }
        return cancelacion;
    }
}
