<?php
$num = $_REQUEST['num'];
$texto = $_REQUEST['texto'];

printf("Número: %'*12.2f Euros <br>",$num);
$cad1 = strtoupper(substr($texto,0,10));
$cad2 = strtolower(substr($texto,10,));
$cad3 = $cad1 . $cad2;
$cad3 = str_replace("\n","<br>",$cad3);

printf($cad3);
