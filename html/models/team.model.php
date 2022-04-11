<?php
class Team
{
    private $id;
    private $nome;
    private $sigla;
    private $escudo;

    public function toJson()
    {
        return json_encode(
        [
            'id'   => $this->getId(),
            'nome' => $this->getNome(),
            'sigla' => $this->getSigla(),
            'escudo' => $this->getEscudo(),
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

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getSigla()
    {
        return $this->sigla;
    }

    public function setSigla($sigla)
    {
        $this->sigla = $sigla;
    }

    public function getEscudo()
    {
        return $this->escudo;
    }

    public function setEscudo($escudo)
    {
        $this->escudo = $escudo;
    }
}
