<?php
    // require_once './routes.php';
    $routes = [
        "/" => "pages/login.php",
        "/login" => "pages/login.php",
        "/dashboard" => "pages/dashboard.php",
        "/partidas" => "pages/partidas.php",
        "/usuarios.admin" => "pages/usuarios.admin.php",
        "/partidas.admin" => "pages/partidas.admin.php",
        "/teams.admin" => "pages/teams.admin.php",
        "/profile" => "pages/profile.php",
        "/logout" => "logout.php",
    ];
    
    
    $url = $_SERVER["REQUEST_URI"];
    
    if(array_key_exists($url, $routes)) {
        require($routes[$url]);
    } else {
        echo "Error 404! Página não existe!";
    }