<?php

include("conexion.php");

$carrera1 = $_POST['carrera1'];
$carrera2 = $_POST['carrera2'];
$nombre = $_POST['nombre'];
$ap = $_POST['apellido_paterno'];
$am = $_POST['apellido_materno'];
$fecha = $_POST['fecha_nacimiento'];
$ciudad = $_POST['ciudad'];
$genero = $_POST['genero'];
$colegio = $_POST['colegio'];
$curso = $_POST['curso'];
$whatsapp = $_POST['whatsapp'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$telmadre = $_POST['telefono_madre'];
$nombremadre = $_POST['nombre_madre'];
$telpadre = $_POST['telefono_padre'];
$nombrepadre = $_POST['nombre_padre'];

$sql = "INSERT INTO postulaciones(
carrera_interes,
carrera_interes2,
nombre,
apellido_paterno,
apellido_materno,
fecha_nacimiento,
ciudad,
genero,
colegio,
curso,
whatsapp,
email,
direccion,
telefono_madre,
nombre_madre,
telefono_padre,
nombre_padre
)

VALUES(
'$carrera1',
'$carrera2',
'$nombre',
'$ap',
'$am',
'$fecha',
'$ciudad',
'$genero',
'$colegio',
'$curso',
'$whatsapp',
'$email',
'$direccion',
'$telmadre',
'$nombremadre',
'$telpadre',
'$nombrepadre'
)";

$conexion->query($sql);

header("Location:index.php");
exit();
?>