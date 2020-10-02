<?php
$num = $_REQUEST['num'];
$texto = $_REQUEST['texto'];

printf("Número: %'*12.2f Euros <br>",$num);
$cad1 = strtoupper(substr($texto,10));
$cad2 = strtolower(substr($texto,10,));
$cad3 = $cad1 . $cad2;

printf($cad3);
