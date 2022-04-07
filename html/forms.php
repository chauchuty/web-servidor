<?php
    require './conn.php';

 
    // Módulo
    if(isset($_GET['operation'])){
        switch ($_GET['operation']) {
            case 'getUsuarios':
                getUsuarios($conn, 10);
                break;
            case 'deleteUser':
                deleteUser($conn, $_GET['id']);
                header('Location: usuarios.php');
                break;
        
            default:
                # code...
                break;
        }
    }
    

    function validateRows($data){
        return $data->num_rows > 0 ? true : false;
    }

    // Funções
    function getUsuarios($conn, $limit=2){
        $usuarios = $conn->query("SELECT * FROM user LIMIT ${limit}");
        if(validateRows($usuarios)){
            return $usuarios;
        }
    }

    function deleteUser($conn, $id){
        $usuarios = $conn->query("DELETE FROM user WHERE id = $id");

        // if(validateRows($usuarios)){
        //     return $usuarios;
        // }
    }

?>