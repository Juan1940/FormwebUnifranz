<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: admin.php");
    exit();
}

include("conexion.php");

$resultado = $conexion->query("SELECT * FROM postulaciones");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel FORMWEB</title>

<style>
body{
    font-family: Arial, sans-serif;
    background:#f5f5f5;
    padding:20px;
}

h1{
    text-align:center;
    color:#f97316;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
}

th{
    background:#f97316;
    color:white;
    padding:10px;
}

td{
    border:1px solid #ddd;
    padding:8px;
    text-align:center;
}

tr:nth-child(even){
    background:#f9f9f9;
}
</style>

</head>
<body>

<h1>Registros FORMWEB</h1>

<table>

<tr>
    <th>ID</th>
    <th>Carrera 1</th>
    <th>Carrera 2</th>
    <th>Nombre</th>
    <th>Ap. Paterno</th>
    <th>Ap. Materno</th>
    <th>Fecha Nac.</th>
    <th>Ciudad</th>
    <th>Género</th>
    <th>Colegio</th>
    <th>Curso</th>
    <th>WhatsApp</th>
    <th>Email</th>
    <th>Dirección</th>
    <th>Tel. Madre</th>
    <th>Nombre Madre</th>
    <th>Tel. Padre</th>
    <th>Nombre Padre</th>
    <th>Fecha Registro</th>
</tr>

<?php while($fila = $resultado->fetch_assoc()) { ?>

<tr>
    <td><?php echo $fila['id']; ?></td>
    <td><?php echo $fila['carrera_interes']; ?></td>
    <td><?php echo $fila['carrera_interes2']; ?></td>
    <td><?php echo $fila['nombre']; ?></td>
    <td><?php echo $fila['apellido_paterno']; ?></td>
    <td><?php echo $fila['apellido_materno']; ?></td>
    <td><?php echo $fila['fecha_nacimiento']; ?></td>
    <td><?php echo $fila['ciudad']; ?></td>
    <td><?php echo $fila['genero']; ?></td>
    <td><?php echo $fila['colegio']; ?></td>
    <td><?php echo $fila['curso']; ?></td>
    <td><?php echo $fila['whatsapp']; ?></td>
    <td><?php echo $fila['email']; ?></td>
    <td><?php echo $fila['direccion']; ?></td>
    <td><?php echo $fila['telefono_madre']; ?></td>
    <td><?php echo $fila['nombre_madre']; ?></td>
    <td><?php echo $fila['telefono_padre']; ?></td>
    <td><?php echo $fila['nombre_padre']; ?></td>
    <td><?php echo $fila['fecha_registro']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>