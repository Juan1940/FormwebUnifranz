<?php
session_start();

if(isset($_POST['usuario']) && isset($_POST['password'])){

    if($_POST['usuario']=="kali4323" && $_POST['password']=="kali4323"){
        $_SESSION['admin'] = true;

        header("Location: panel.php");
        exit();
    }

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portal Administrador FORMWEB</title>

<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

<div class="overlay"></div>

<div class="login-box">

    <div class="logo">
        <h1>FORM<span>WEB</span></h1>
        <p>Portal Administrativo</p>
    </div>

    <form action="admin.php" method="POST">

        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="usuario" placeholder="Usuario" required>
        </div>

        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Contraseña" required>
        </div>

        <button type="submit">
            Ingresar
        </button>

    </form>

</div>

</body>
</html>