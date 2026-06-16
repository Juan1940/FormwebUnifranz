<?php
$host     = "://aivencloud.com"; // El "Host" de Aiven
$port     = "12345";                       // El "Port" de Aiven
$user     = "avnadmin";                    // El "User" de Aiven
$password = "tu_contraseña_de_aiven";      // La contraseña de Aiven
$dbname   = "defaultdb";                   // Tu base de datos

$conexion = mysqli_connect($host, $user, $password, $dbname, $port);

?>
