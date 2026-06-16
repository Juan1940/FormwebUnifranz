<?php
$host     = "//mysql-1605f630-formwebunifranz.a.aivencloud.com"; // El "Host" de Aiven
$port     = "23092";                       // El "Port" de Aiven
$user     = "avnadmin";                    // El "User" de Aiven
$password = "AVNS_6LKSG3dKJPUM0vwU_ap";      // La contraseña de Aiven
$dbname   = "defaultdb";                   // Tu base de datos

$conexion = mysqli_connect($host, $user, $password, $dbname, $port);

?>
