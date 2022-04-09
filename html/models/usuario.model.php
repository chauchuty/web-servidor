<?php

class Usuario {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $id_admin;

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

    public function getIsAdmin() {
        return $this->is_admin;
    }

    public function setIsAdmin($is_admin) {
        $this->is_admin = $is_admin;
    }
}
