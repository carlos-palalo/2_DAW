<?php
session_start();
include 'head.php';
try {
    $borrado = false;
    if (isset($_REQUEST['borrar'])) {
        $num = htmlspecialchars($_REQUEST['num_incidencia']);
        foreach ($_SESSION['incidencias'] as $incidencia) {
            if ($incidencia[0] == $num) {
                unset($_SESSION['incidencias'][$num - 1]);
                echo "<script>alert('Incidencia número " . $num . " borrada con éxito');</script>";
                $borrado = true;
            }
        }
        if ($borrado == false) {
            echo "<script>alert('Por favor, introduce un Número Incidencia válido');</script>";
        }
    }
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

print ' 
            <strong>INTRODUCE EL IDENTIFICADOR DE LA INCIDENCIA A BORRAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              
              
              <tr><td align="right"><strong>Num Incidencia :</strong></td><td>
              <div align="left">
                    <input type="text" name="num_incidencia"/>
              </div></td></tr>
              
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="borrar" type="submit" id="borrar" value="Dar de Baja"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>';
include 'pie.php';
