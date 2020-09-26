<?php
if( isset($_POST['calcular']) ) {
	  $peso   = $_POST['peso'];
          $altura =  $_POST['altura']; 
          $html = resultado($peso, $altura, imc($peso, $altura));
          $html.= '<p class="centrado">';
          $html.= '<a href="imc.php"><img src="Imagenes/icon_home.gif" /><br>Home</a></p>';
      echo $html;
  } else {
      header("Location: imc.php");
  } 
     
       

function valoracion($imc) {
    if ($imc >= 18.5 and  $imc <= 24.99) {
         $valoracion = 'NORMAL';
    } elseif ($imc >= 25 and $imc <= 29.99) {
        $valoracion = 'PREOBESO';
    } elseif ($imc >= 30) {
        $valoracion = 'OBESO';
    } elseif ($imc < 18.5) { $valoracion = 'INFRAPESO'; }
    return $valoracion;
  }
  
  function imc($peso, $altura) { return $peso/($altura * $altura); }

  function resultado ($peso, $altura, $imc){
	$html = '<h3>IMC</p></h3>'; 
    $html.= '<table>';
    $html.= '<tr><td><strong>Peso</strong></td><td>';
    $html.= $peso.'</td><td>Kg</td></tr>';
	$html.= '<tr><td><b>Altura</b></td>';
    $html.= '<td>'.$altura.'</td><td>Mt</td></tr>';
	$html.= '<tr><td><b>IMC</b></td>';
    $html.= '<td>'.number_format($imc, 2).'</td><td>kg/m<sup>2</sup></td></tr>';
    $html.= '<tr><td><b>Valoraci&oacute;n</b></td><td>'.valoracion($imc);
	$html.= '</td><td></td></tr></table>';
    return $html.'<br';
  }
?>
