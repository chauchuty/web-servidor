<?php
class Team
{
    private $id;
    private $data_inicio;
    private $team_a;
    private $team_b;
    private $resultado;
    private $status;

    public function toJson()
    {
        return json_encode(
        [
            'id' => $this->getId(),
            'data_inicio' => $this->getDataInicio(),
            'team_a' => $this->getTeamA(),
            'team_b' => $this->getTeamB(),
            'resultado' => $this->getResultado(),
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

    public function getTeamA()
    {
        return $this->team_a;
    }

    public function setTeamA($team_a)
    {
        $this->team_a = $team_a;
    }

    public function getTeamB()
    {
        return $this->team_b;
    }

    public function setTeamB($team_b)
    {
        $this->team_b = $team_b;
    }

    public function getResultado()
    {
        return $this->resultado;
    }

    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
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
}
