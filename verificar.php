<?php
include_once'data/usuariobd.php';
$usuarioBD = new UsuarioBD();

if(isset($_GET['token'])){
    $token = $_GET['token'];
    $resultado = $resultado['message'];
    $mensaje = $resultado['message'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de cuenta</title>
</head>
<body>
    <div class="container">
        <h1>Verificación de cuenta</h1>
        <p class="mensaje"><?php echo $mensaje; ?></p>
        <a href="index.php" class="boton">Ir a Inicio de sesión</a>

    </div>
</body>
</html>