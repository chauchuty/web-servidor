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
    "cadastrar" => function (){
        return cadastrar();
    }
];

$gateway[$_POST['operation']]();

// Functions

function login()
{
    global $usuarioController;
    $usuario = $usuarioController->findOne($_POST['email'], $_POST['senha']);
    

    if ($usuario) {
        $_SESSION['id'] = $usuario->getId();
        $_SESSION['email'] = $usuario->getEmail();
        header('Location: ./pages/home.page.php');
        exit();
    }
    header('Location: ./pages/login.php?error=1');
}

function cadastrar(){
    
}