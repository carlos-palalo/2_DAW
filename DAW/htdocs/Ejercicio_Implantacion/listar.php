<?php

session_start();
include 'head.php';
print ' 
         <strong>SELECCIONA EL TIPO DE INCIDENCIA A LISTAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              										  </td></tr>
              <tr>
                <td align="right"><strong>Tipo :</strong></td><td>
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
                </div>
               </td>
              </tr>
              <tr >
              <td colspan="2"><div align="center"><strong>
                <input name="listar" type="submit" id="listar" value="Listar"/>
                </strong>
                </div>
              </td>
            </tr>
              
        </table>
    </form>
        </div>';
try {
  if (isset($_REQUEST['listar'])) {
    echo '<table style="margin: 0 auto"><tr>
          <th>Num_Incidencia</th>
          <th>Urgencia</th>
          <th>Tipo</th>
          <th>FechaHora</th>
          <th>Lugar</th>
          <th>Ip</th>
          <th>Descripcion</th>
        </tr>';
    foreach ($_SESSION['incidencias'] as $incidencias) {
      if ($incidencias[2] == $_REQUEST['tipo']) {
        echo "<tr>";
        for ($valor = 0; $valor < 7; $valor++) {
          echo "<td>" . $incidencias[$valor] . "</td>";
        }
        echo "</tr>";
      }
    }
    echo "</table>";
  }
} catch (Exception $e) {
  echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}
include 'pie.php';
