<?php

    require_once "../models/User.class.php";

    $msg = array("", "", "", "");
    $erro = false;
    $alert = false;
    $nome = "";
    $email = "";
    $senha = "";
    $confirmaSenha = "";

    if ($_POST)
    {
        // validação do nome
        if(empty($_POST["nome"]))
        {
            $msg[0] = "O nome é obrigatório.";
            $erro = true;
        }

        // validações do e-mail
        if(empty($_POST["email"]))
        {
            $msg[1] = "O e-mail é obrigatório.";
            $erro = true;
        }

        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $msg[1] = "E-mail inválido.";
            $erro = true;
        }

        // validações da senha
        if(empty($_POST["senha"]))
        {
            $msg[2] = "A senha é obrigatória.";
            $erro = true;
        }

        if (strlen($_POST["senha"]) < 8) {
            $msg[2] = "A senha deve ter no mínimo 8 caracteres.";
            $erro = true;
        }

        // comparação das senhas
        if($_POST["senha"] != $_POST["confirmaSenha"])
        {
            $msg[3] = "As senhas não coincidem.";
            $erro = true;
        }

        // criando novo usuário caso não haja erros
        if(!$erro)
        {
            $user = new User
            (
                $_POST["nome"],
                $_POST["email"],
                $_POST["senha"]
            );

            $alert = true;
        }

        if($erro)
        {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $confirmaSenha = $_POST["confirmaSenha"];
        }
    }

?>