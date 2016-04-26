<?php
header('Cache-Control: no-cache, must-revalidate');
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header('Content-type: application/json');

$json = array();

$json['hoy']['fecha'] = "02/06/2014";
$json['hoy']['restriccion'] = "No Hay Restricción";
$json['hoy']['condicion'] = "Regular";

$json['manana']['fecha'] = "03/06/2014";
$json['manana']['restriccion'] = "MACRO";
$json['manana']['condicion'] = "Alerta";

$json['ayer']['fecha'] = "01/06/2014";
$json['ayer']['restriccion'] = "No Hay Restricción";
$json['ayer']['condicion'] = "Bueno";

echo json_encode($json);
?>
