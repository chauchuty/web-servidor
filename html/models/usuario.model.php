<?php

class Usuario {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $creditos;
    private $is_admin;
    private $created_at;
    private $updated_at;

    public function toJson()
    {
        return json_encode(
        [
            'id'   => $this->getId(),
            'nome' => $this->getNome(),
            'email' => $this->getEmail(),
            'senha' => $this->getSenha(),
            'creditos' => $this->getCreditos(),
            'is_admin' => $this->getIsAdmin(),
        ]);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getCreditos() {
        return $this->creditos;
    }

    public function setCreditos($creditos) {
        $this->creditos = $creditos;
    }

    public function getIsAdmin() {
        return $this->is_admin;
    }

    public function setIsAdmin($is_admin) {
        $this->is_admin = $is_admin;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }

    public function getUpdatedAt() {
        return $this->updated_at;
    }

    public function setUpdatedAt($updated_at) {
        $this->updated_at = $updated_at;
    }
}
