<?php
require_once 'config.php';

try{
$dbh = new PDO('mysql:host=localhost; dbname=prueba','root', '');
}catch(PDOExeption $e){
    echo "error de conexion!" . $e->getMessage;
}

$consulta = $dbh->prepare("SELECT * FROM prueba2");
$consulta->execute();
$rta=$consulta->fetchALL(PDO::FETCH_ASSOC);
print_r($rta);

$json_data = json_encode($rta);

// Establecer el tipo de contenido como JSON
header('Content-Type: application/json');

// Imprimir el JSON resultante
echo $json_data;
?>



