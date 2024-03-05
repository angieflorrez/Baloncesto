<?php
include_once('config/config.php');
include_once('config/conexion.php');
$prueba=new Conexion(DB_USER,BD_PASS,DB_HOST,DB_NAME);
$rta=$prueba->conectarse();
print_r($rta);
?>