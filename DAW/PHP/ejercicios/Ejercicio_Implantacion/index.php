<?php
session_start();
include 'head.php';

$_SESSION['auto'] = 1;
$incidencias[] = array($_SESSION['auto'], 'Si', 'Mobilario Urbano', date('2020-11-23 10:00'), 'Plaza Mayor', '192.168.15.20', 'Farola rota');
$_SESSION['auto']++;

$incidencias[] = array($_SESSION['auto'], 'Si', 'Mobilario Urbano', date('2020-11-23 10:10'), 'Plaza Mayor', '192.168.15.20', 'Farola rota otra vez');
$_SESSION['incidencias'] = $incidencias;

echo '<center><img src="images/alta_incidencia.png" width="600" height="300" alt="incidencia"/></center>';


include 'pie.php';
