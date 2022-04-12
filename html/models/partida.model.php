<?php
class Partida
{
    private $id;
    private $data_inicio;
    private $fk_team_a_id;
    private $fk_team_b_id;
    private $vencedor;
    private $status;
    private $created_at;
    private $updated_at;

    public function toJson()
    {
        return json_encode(
        [
            'id' => $this->getId(),
            'data_inicio' => $this->getDataInicio(),
            'fk_team_a_id' => $this->getFkTeamAId(),
            'fk_team_b_id' => $this->getFkTeamBId(),
            'vencedor' => $this->getVencedor(),
            'status' => $this->getStatus()
        ]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDataInicio()
    {
        return $this->data_inicio;
    }

    public function setDataInicio($data_inicio)
    {
        $this->data_inicio = $data_inicio;
    }

    public function getFkTeamAId()
    {
        return $this->fk_team_a_id;
    }

    public function setFkTeamAId($fk_team_a_id)
    {
        $this->fk_team_a_id = $fk_team_a_id;
    }

    public function getFkTeamBId()
    {
        return $this->fk_team_b_id;
    }

    public function setFkTeamBId($fk_team_b_id)
    {
        $this->fk_team_b_id = $fk_team_b_id;
    }

    public function getVencedor()
    {
        return $this->vencedor;
    }

    public function setVencedor($vencedor)
    {
        $this->vencedor = $vencedor;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }
}
