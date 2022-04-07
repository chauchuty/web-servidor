<?php
    require_once './models/usuario.model.php';
    require_once './controller/user.controller.php';

    switch ($_POST['operation']) {
        case 'insertUsuario':
            insertUsuario($_POST['username'], $_POST['password']);
            break;
        
        default:
            # code...
            break;
    }

    // Usuário
    function insertUsuario($username, $password){
        echo $username . $password;
        $usuario = new Usuario(0, $username, $password);
        $userController = new UserController();
        // $userController->insert($usuario);
    }
?>