<?php
session_start();
include 'head.php';
try {
      function getRealIP()
      {
            if (isset($_SERVER["HTTP_CLIENT_IP"])) {
                  return $_SERVER["HTTP_CLIENT_IP"];
            } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
                  return $_SERVER["HTTP_X_FORWARDED_FOR"];
            } elseif (isset($_SERVER["HTTP_X_FORWARDED"])) {
                  return $_SERVER["HTTP_X_FORWARDED"];
            } elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])) {
                  return $_SERVER["HTTP_FORWARDED_FOR"];
            } elseif (isset($_SERVER["HTTP_FORWARDED"])) {
                  return $_SERVER["HTTP_FORWARDED"];
            } else {
                  return $_SERVER["REMOTE_ADDR"];
            }
      }

      if (isset($_REQUEST['enviar'])) {
            if (isset($_REQUEST['urgente'])) {
                  $urg = "Sí";
            } else {
                  $urg = "No";
            }
            $lugar = htmlspecialchars($_REQUEST['lugar']);
            $descripcion = htmlspecialchars($_REQUEST['descripcion']);

            $_SESSION['auto']++;
            $_SESSION['incidencias'][$_SESSION['auto'] - 1] = array($_SESSION['auto'], $urg, $_REQUEST['tipo'], date('Y-m-d H:i'), $lugar, getRealIP(), $descripcion);

            echo "<script>alert('Alta con éxito!');</script>";
      }
} catch (Exception $e) {
      echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

print ' 
        <h2 class="postheader">FORMULARIO ALTA INCIDENCIA</h2>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              <tr>
              <td align="right"><strong>Urgente? :</strong></td>
              <td>

              <input type="checkbox" name="urgente" value="urg"/>Si											  </td></tr>
              <tr><td align="right"><strong>Tipo :</strong></td><td>
              <div align="left">
                    <select name="tipo">
                      <option value="Basuras">Basuras</option>
                      <option value="Aseo Urbano">Aseo Urbano</option>
                      <option value="Mobiliario Urbano">Mobiliario Urbano</option>
                      <option value="Vandalismo">Vandalismo</option>
                       <option value="Transporte">Transporte</option>
                      <option value="Señales y Semaforos">Señales y Semaforos</option>
                      <option value="Mobiliario Urbano">Otros</option>
                      
                    </select>
              </div></td></tr>
              
              <tr><td align="right"><strong>Lugar :</strong></td><td>
              <div align="left">
                    <input type="text" name="lugar" size=35"/>
              </div></td></tr>
              <tr><td align="right"><strong>Descripcion: </strong></td><td>
              <div align="left">
                    <textarea cols=50 rows=4 name="descripcion"></textarea>
              </div></td></tr>
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="enviar" type="submit" id="enviar" value="Dar de alta"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>
<div id="imagen1">
        

        </div>        
';

include 'pie.php';
