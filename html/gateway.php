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
    "cadastrarUsuario" => function (){
        return cadastrarUsuario();
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

function cadastrarUsuario(){
    global $usuarioController;
    if(isEmail($_POST['email']) && isFullName($_POST['nome']) && isPasswordValid($_POST['senha']) && $_POST['senha'] == $_POST['senha_repetida']){
        $usuario = new Usuario();
        $usuario->setNome($_POST['nome']);
        $usuario->setEmail($_POST['email']);
        $usuario->setSenha($_POST['senha']);
        $usuario = $usuarioController->insert($usuario);
        header('Location: ./pages/login.php');
        exit();
    }
    header('Location: ./pages/cadastro.php?error=2');
}