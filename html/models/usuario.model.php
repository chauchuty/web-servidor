<?php

class Usuario {
    private $id;
    private $nome;
    private $email;
    private $password;

    public function __construct($id, $nome, $email, $password) {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->password = $password;
    }
}
