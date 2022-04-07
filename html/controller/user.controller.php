<?php
require './db.php';

class UserController
{
    function insert($usuario)
    {
        $data = [
            'username' => $usuario->getUsername(),
            'password' => $usuario->getPassword()
        ];
        global $db;
        $query = $db->prepare("insert into usuario (username, password) values (:username, :password)");
        $query->execute($data);
    }
}
    // require_once './../db.php';
    // require_once './../../models/usuario.model.php';

    // function getAll(){
    //     global $db;
    //     $query = $db->prepare("SELECT * FROM usuarios");
    //     $query->execute();
    //     return $query->fetchObject('Usuarios');
    // }

    // function getOne($id){
    //     global $db;
    //     $query = $db->prepare("SELECT * FROM usuarios WHERE id = $id");
    //     $query->execute();
    //     return $query->fetchObject('Usuarios');
    // }

    // function insert($usuario){
    //     $data = [
    //         'username' => $usuario->getUsername(),
    //         'password' => $usuario->getPassword()
    //     ];
    //     global $db;
    //     $query = $db->prepare("insert into usuarios (username, password) values (:username, :password)");
    //     $query->execute($data);
    // }
