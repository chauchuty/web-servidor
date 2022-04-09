<?php 
   class Team {
       private $id;
       private $nome;
       private $sigla;
       private $escudo;

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

            public function getSigla() {
                return $this->sigla;
            }

            public function setSigla($sigla) {
                $this->sigla = $sigla;
            }

            public function getEscudo() {
                return $this->escudo;
            }

            public function setEscudo($escudo) {
                $this->escudo = $escudo;
            }
   }
