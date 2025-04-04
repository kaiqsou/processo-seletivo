<?php

    require_once "../models/User.class.php";

    $msg = array("", "", "", "");
    $erro = false;
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

        // validação do e-mail
        if(empty($_POST["email"]))
        {
            $msg[1] = "O e-mail é obrigatório.";
            $erro = true;
        }

        // validação da senha
        if(empty($_POST["senha"]))
        {
            $msg[2] = "A senha é obrigatória.";
            $erro = true;
        }

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
        }

        if($erro)
        {
            $nome = $_POST["nome"];
            $nome = $_POST["email"];
            $nome = $_POST["senha"];
            $nome = $_POST["confirmaSenha"];
        }
    }

?>