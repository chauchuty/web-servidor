<?php 
    // $db_host = 'webservidor.c9kxg983k5ek.us-east-1.rds.amazonaws.com';
    // $db_name = 'webservidor';
    // $db_user = 'root';
    // $db_pass = '!!010203';
    $db_host = '172.0.0.3';
    $db_name = 'webservidor';
    $db_user = 'root';
    $db_pass = '010203';
    
    try {
        $db = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
?>