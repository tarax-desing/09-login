<?php
include_once 'data/usuariobd.php';
$usuariobd = new UsuarioBD();
//verifica si el correo se 
if(isset($_GET['token'])){
    $token = $_GET['token'];
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['nueva_password'])){
        $resultado = $usuariobd->restablecerPassword($token, $_POST['nueva_password']);
        $mensaje = $resultado['message'];
    }

}else{
    header("Location: index.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer contraseña</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<se>
    <div>
    <h1>¨Restablecer contraseña</h1>
    <?php
    if(!empty($mensaje)): ?>
    <p class="mensaje"><?php echo $mensaje; ?></p>
    <?php if($resultado['success']): ?>
        <a href="index.php" class="boton">Ir a iniciar sesión.</a>
        <?php endif;
        else:
        ?>
        <form method="POST">
          <input type="password" name="nueva_password" required placehosder= "Nueva Contraseña.">
          <input type="password" name="confirmar_password" required placehosder= "Confirmar Nueva Contraseña.">
          <input type="submit"value="Restablecer contraseña.">
        </form>
        <?php endif; ?>
  </div>
  <script src="index.js"></script>
</body>
</html>