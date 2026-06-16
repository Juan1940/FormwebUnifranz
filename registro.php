<?php
include("conexion.php");

$sql = "SELECT * FROM postulaciones";
$resultado = mysqli_query($conexion,$sql);

while($fila = mysqli_fetch_assoc($resultado)){
?>

<div style="border:1px solid #ccc;padding:20px;margin:20px;border-radius:10px;">

<h2>Postulante #<?php echo $fila['id']; ?></h2>

<p><b>Carrera 1:</b> <?php echo $fila['carrera_interes']; ?></p>

<p><b>Carrera 2:</b> <?php echo $fila['carrera_interes_2']; ?></p>

<p><b>Nombre:</b> <?php echo $fila['nombre']; ?></p>

<p><b>Apellido Paterno:</b> <?php echo $fila['apellido_paterno']; ?></p>

<p><b>Apellido Materno:</b> <?php echo $fila['apellido_materno']; ?></p>

<p><b>Fecha Nacimiento:</b> <?php echo $fila['fecha_nacimiento']; ?></p>

<p><b>Ciudad:</b> <?php echo $fila['ciudad']; ?></p>

<p><b>Género:</b> <?php echo $fila['genero']; ?></p>

<p><b>Colegio:</b> <?php echo $fila['colegio']; ?></p>

<p><b>Curso:</b> <?php echo $fila['curso']; ?></p>

<p><b>Whatsapp:</b> <?php echo $fila['whatsapp']; ?></p>

<p><b>Email:</b> <?php echo $fila['email']; ?></p>

<p><b>Dirección:</b> <?php echo $fila['direccion_zona']; ?></p>

<p><b>Teléfono Madre:</b> <?php echo $fila['num_referencia_madre']; ?></p>

<p><b>Nombre Madre:</b> <?php echo $fila['nombre_madre']; ?></p>

<p><b>Teléfono Padre:</b> <?php echo $fila['num_referencia_padre']; ?></p>

<p><b>Nombre Padre:</b> <?php echo $fila['nombre_padre']; ?></p>

</div>

<?php
}
?>