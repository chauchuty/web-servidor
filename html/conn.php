<?php 
    $conn = new mysqli('webservidor.c9kxg983k5ek.us-east-1.rds.amazonaws.com', 'root', '!!010203', 'webservidor');

    if($conn->connect_errno){
        throw new Exception('Erro na conexão ' . $conn->connect_errno);
    }
 
?>