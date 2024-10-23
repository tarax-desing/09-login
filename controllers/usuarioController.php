<?php
session_start();
include_once '../data/usuariobd.php';
$usuariobd = new UsuarioBD();

function redirigirConMensaje($url,$success, $mensaje){
    $_SESSION['success'] =$success;
    $_SESSION['message'] =$mensaje;
    header("Location: $url");
    exit();
}

//registro usuario
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['registro'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $resultado = $usuariobd->registrarUsuario($email, $password);
    redirigirConMensaje('../index.php', $resultado['success'], $resultado['message']);
}