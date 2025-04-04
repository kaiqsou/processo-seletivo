<?php

    class User
    {
        public function __construct
        (
            private string $nome = "",
            private string $email = "",
            private string $senha = "",
            private string $confirmaSenha = ""
        ) {}
    

        // métodos nome
        public function getNome()
        {
            return $this -> nome;
        }

        public function setNome()
        {
            $this -> nome = $nome;
        }

        // métodos email
        public function getEmail()
        {
            return $this -> email;
        }

        public function setEmail()
        {
            $this -> email = $email;
        }
        
        // métodos senha
        public function getSenha()
        {
            return $this -> senha;
        }

        public function setSenha()
        {
            $this -> senha = $senha;
        }
    }

?>