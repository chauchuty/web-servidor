<?php
require_once dirname(__FILE__) . './../db.php';
require_once dirname(__FILE__) . './../models/team.model.php';

class TeamController
{
    function getAll()
    {
        global $db;
        $query = $db->prepare('SELECT * FROM v$team ORDER BY nome');
        $query->execute();
        return $query;
    }

    function getOne($id)
    {
        global $db;
        $query = $db->prepare('SELECT * FROM team WHERE id = :id');
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetchObject('Team');
    }

    function insert($team){
        global $db;
        $query = $db->prepare('INSERT INTO team (nome, sigla, escudo) VALUES (:nome, :sigla, :escudo)');
        $query->bindValue(':nome', $team->getNome());
        $query->bindValue(':sigla', $team->getSigla());
        $query->bindValue(':escudo', $team->getEscudo());
        $query->execute();
        return $query->fetchObject("Team");
    }

    function update($team){
        global $db;
        $query = $db->prepare('UPDATE team SET nome = :nome, sigla = :sigla, escudo = :escudo WHERE id = :id');
        $query->bindValue(':id', $team->getId());
        $query->bindValue(':nome', $team->getNome());
        $query->bindValue(':sigla', $team->getSigla());
        $query->bindValue(':escudo', $team->getEscudo());
        $query->execute();
        return $query->fetchObject("Team");
    }

    function delete($id){
        global $db;
        $query = $db->prepare('DELETE FROM team WHERE id = :id');
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetchObject("Team");
    }

    function getCount(){
        global $db;
        $query = $db->prepare('SELECT COUNT(*) FROM team');
        $query->execute();
        return $query->fetchColumn();
    }
}
