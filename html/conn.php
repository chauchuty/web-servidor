<?php 
    $db_host = 'webservidor.c9kxg983k5ek.us-east-1.rds.amazonaws.com';
    
    $conn = new mysqli($db_host, 'root', '!!010203', 'webservidor');

    if($conn->connect_errno){
        throw new Exception('Erro na conexão ' . $conn->connect_errno);
    }
?>