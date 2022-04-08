<?php
require './db.php';

class UserController
{
    function login($email, $password){
        global $db;
        $query = $db->prepare('SELECT * FROM usuario WHERE email = :email AND password = :password');
        $query->bindValue(':email', $email);
        $query->bindValue(':password', $password);
        $query->execute();
        return $query->fetch();
    }

    function getAll(){
        global $db;
        $query = $db->prepare('SELECT * FROM usuario');
        $query->execute();
        return $query->fetchAll();
    }

    function getOne($id){
        global $db;
        $query = $db->prepare('SELECT * FROM usuario WHERE id = :id');
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetch();
    }
}
   