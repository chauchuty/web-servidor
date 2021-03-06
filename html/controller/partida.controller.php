<?php
require_once dirname(__FILE__) . './../db.php';
require_once dirname(__FILE__) . './../models/partida.model.php';

class PartidaController
{
    function getAll()
    {
        global $db;
        $query = $db->prepare('SELECT * FROM v$partida');
        $query->execute();
        return $query;
    }

    function getOne($id)
    {
        global $db;
        $query = $db->prepare('SELECT * FROM partida WHERE id = :id');
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetchObject('Partida');
    }

    function insert($partida)
    {
        global $db;
        $query = $db->prepare('INSERT INTO partida (data_inicio, fk_team_a_id, fk_team_b_id, perc_team_a, perc_team_b, perc_empate) VALUES (:data_inicio, :fk_team_a_id, :fk_team_b_id, :perc_team_a, :perc_team_b, :perc_empate)');
        $query->bindValue(':data_inicio', $partida->getDataInicio());
        $query->bindValue(':fk_team_a_id', $partida->getFkTeamAId());
        $query->bindValue(':fk_team_b_id', $partida->getFkTeamBId());
        $query->bindValue(':perc_team_a', $partida->getPercTeamA());
        $query->bindValue(':perc_team_b', $partida->getPercTeamB());
        $query->bindValue(':perc_empate', $partida->getPercEmpate());
        $query->execute();
        return $query->fetchObject("Partida");
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
        $query = $db->prepare('DELETE FROM partida WHERE id = :id');
        $query->bindValue(':id', $id);
        return $query->execute();
    }

    function getCount()
    {
        global $db;
        $query = $db->prepare('SELECT COUNT(*) FROM usuario');
        $query->execute();
        return $query->fetchColumn();
    }
}
