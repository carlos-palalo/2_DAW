<?php
    /* Al ejecutar por primera vez el script la variable pepe será nula ya que no se ha transferido aún el formulario. Al pulsar sucesivamente
    en el botón Enviar iremos visualizando los valores que se vayan transfiriendo */
    print "He recibido la variable pepe con valor: ".$_REQUEST['pepe'];
    /* al enviar el formulario se recargará este mismo documento ya que hemos puesto action="" */
?>
<form name="prueba" method="post" action="">
<input type="text" name="pepe" value=''>
<input type="submit" value="enviar">