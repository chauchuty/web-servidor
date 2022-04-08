<?php 
    $db_host = '10.0.0.3';
    $db_name = 'webservidor';
    $db_user = 'root';
    $db_pass = '';
    
    try {
        $db = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
?>