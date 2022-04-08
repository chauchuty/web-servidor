<?php
    require_once './db.php';
    require_once './controller/user.controller.php';
    

    switch ($_POST['operation']) {
        case 'login':
            login($_POST['email'], $_POST['password']);
            break;
        
        default:
            # code...
            break;
    }

    // Functions

    function login($email, $password){
        $userController = new UserController();
        $userController.login($email, $password);

    }
