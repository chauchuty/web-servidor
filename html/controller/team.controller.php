<?php
require dirname(__FILE__) . './../vendor/autoload.php';
// require_once dirname(__FILE__) . './../db.php';
// require_once dirname(__FILE__) . './../models/team.model.php';

class TeamController
{
    function __construct()
    {
        $this->db = new Database();
        $this->conn = $this->db->getConnection();
        $this->team = new Team();
    }

    function getAll()
    {
        $query = $this->conn->prepare('SELECT * FROM v$team ORDER BY nome');
        $query->execute();
        return $query;
    }

    function getOne($id)
    {
        
        $query = $this->conn->prepare('SELECT * FROM team WHERE id = :id');
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetchObject('Team');
    }

    function insert($team){
        
        $query = $this->conn->prepare('INSERT INTO team (nome, sigla, escudo) VALUES (:nome, :sigla, :escudo)');
        $query->bindValue(':nome', $team->getNome());
        $query->bindValue(':sigla', $team->getSigla());
        $query->bindValue(':escudo', $team->getEscudo());
        $query->execute();
        return $query->fetchObject("Team");
    }

    function update($team){
        
        $query = $this->conn->prepare('UPDATE team SET nome = :nome, sigla = :sigla, escudo = :escudo WHERE id = :id');
        $query->bindValue(':id', $team->getId());
        $query->bindValue(':nome', $team->getNome());
        $query->bindValue(':sigla', $team->getSigla());
        $query->bindValue(':escudo', $team->getEscudo());
        $query->execute();
        return $query->fetchObject("Team");
    }

    function delete($id){
        
        $query = $this->conn->prepare('DELETE FROM team WHERE id = :id');
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->rowCount();
    }

    function getCount(){
        $query = $this->conn->prepare('SELECT COUNT(*) FROM team');
        $query->execute();
        return $query->fetchColumn();
    }
}
