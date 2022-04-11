<?php
require_once dirname(__FILE__) . './../db.php';
require_once dirname(__FILE__) . './../models/usuario.model.php';

class UsuarioController
{
    function getAll()
    {
        global $db;
        $query = $db->prepare('SELECT * FROM v$usuario');
        $query->execute();
        return $query;
    }

    function getOne($id)
    {
        global $db;
        $query = $db->prepare('SELECT * FROM usuario WHERE id = :id');
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetchObject('Usuario');
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

    function insert($usuario)
    {
        global $db;
        $query = $db->prepare('INSERT INTO usuario (nome, email, senha, creditos) VALUES (:nome, :email, :senha, :creditos)');
        $query->bindValue(':nome', $usuario->getNome());
        $query->bindValue(':email', $usuario->getEmail());
        $query->bindValue(':senha', $usuario->getSenha());
        $query->bindValue(':creditos', $usuario->getCreditos() ?? 0);
        $query->execute();
        return $query->fetchObject("Usuario");
    }

    function update($usuario)
    {
        global $db;
        $senha = !isEmpty($usuario->getSenha()) ? 'senha = :senha,' : '';
        $query = $db->prepare("UPDATE usuario SET nome = :nome, $senha creditos = :creditos ,email = :email, is_admin = :is_admin WHERE id = :id");
        $query->bindValue(':id', $usuario->getId());
        $query->bindValue(':nome', $usuario->getNome());
        $query->bindValue(':email', $usuario->getEmail());
        !isEmpty($usuario->getSenha()) ? $query->bindValue(':senha', $usuario->getSenha()) : null;
        $query->bindValue(':creditos', $usuario->getCreditos());
        $query->bindValue(':is_admin', $usuario->getIsAdmin());
        $query->execute();
        header('Location: ./pages/usuarios.admin.php');

        // return $query->fetchObject("Usuario");
    }

    function delete($id){
        global $db;
        $query = $db->prepare('DELETE FROM usuario WHERE id = :id');
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetchObject("Usuario");
    }

    function getCount()
    {
        global $db;
        $query = $db->prepare('SELECT COUNT(*) FROM usuario');
        $query->execute();
        return $query->fetchColumn();
    }
}
