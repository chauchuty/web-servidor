<?php
class Team
{
    private $id;
    private $data_inicio;
    private $data_fim;
    private $team_a;
    private $team_b;
    private $vencedor;

    public function toJson()
    {
        return json_encode(
        [
            'id' => $this->getId(),
            'data_inicio' => $this->getDataInicio(),
            'data_fim' => $this->getDataFim(),
            'team_a' => $this->getTeamA(),
            'team_b' => $this->getTeamB(),
            'vencedor' => $this->getVencedor(),
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

    public function getDataFim()
    {
        return $this->data_fim;
    }

    public function setDataFim($data_fim)
    {
        $this->data_fim = $data_fim;
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

    public function getVencedor()
    {
        return $this->vencedor;
    }

    public function setVencedor($vencedor)
    {
        $this->vencedor = $vencedor;
    }   
}
