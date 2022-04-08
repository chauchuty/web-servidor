<?php
require './db.php';

require_once dirname(__FILE__) . './../models/usuario.model.php';

class UsuarioController
{
    function getAll()
    {
        global $db;
        $query = $db->prepare('SELECT * FROM usuario');
        $query->execute();
        return $query->fetchAll();
    }

    function getOne($id)
    {
        global $db;
        $query = $db->prepare('SELECT * FROM usuario WHERE id = :id');
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetch();
    }

    function findOne($email, $senha)
    {
        global $db;
        $query = $db->prepare('SELECT * FROM usuario WHERE email = :email AND senha = :senha');
        $query->bindValue(':email', $email);
        $query->bindValue(':senha', $senha);
        $query->execute();
        return $query->fetchObject("Usuario");
    }
}
