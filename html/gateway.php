<?php
session_start();


require_once './controller/usuario.controller.php';

// Controllers
$usuarioController = new UsuarioController();

// Module
$gateway = [
    "login" => function () {
        return login();
    },
];

$gateway[$_POST['operation']]();

// Functions

function login()
{
    global $usuarioController;
    $usuario = $usuarioController->findOne($_POST['email'], $_POST['senha']);
    

    if ($usuario) {
        $_SESSION['id'] = $usuario->getId();
        $_SESSION['email'] = $usuario->getId();
        header('Location: ./pages/home.page.php');
        exit();
    }
    header('Location: ./pages/login.page.php?error=1');
}