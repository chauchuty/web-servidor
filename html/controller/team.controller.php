<?php
require_once dirname(__FILE__) . './../db.php';
require_once dirname(__FILE__) . './../models/team.model.php';

class TeamController
{
    function getAll()
    {
        global $db;
        $query = $db->prepare('SELECT * FROM team');
        $query->execute();
        return $query;
    }

    // function getOne($id)
    // {
    //     global $db;
    //     $query = $db->prepare('SELECT * FROM usuario WHERE id = :id');
    //     $query->bindValue(':id', $id);
    //     $query->execute();
    //     return $query->fetchObject('Team');
    // }

    // function findOne($email, $senha)
    // {
    //     global $db;
    //     $query = $db->prepare('SELECT * FROM usuario WHERE email = :email AND senha = :senha');
    //     $query->bindValue(':email', $email);
    //     $query->bindValue(':senha', $senha);
    //     $query->execute();
    //     return $query->fetchObject("Team");
    // }

    function insert($team){
        global $db;
        $query = $db->prepare('INSERT INTO team (nome, sigla, escudo) VALUES (:nome, :sigla, :escudo)');
        $query->bindValue(':nome', $team->getNome());
        $query->bindValue(':sigla', $team->getSigla());
        $query->bindValue(':escudo', $team->getEscudo());
        $query->execute();
        return $query->fetchObject("Team");
    }
}
