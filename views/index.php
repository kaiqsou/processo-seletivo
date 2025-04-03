<?php 

    require_once "../models/User.class.php";

    $msg = array("", "", "", "");
    $erro = false;

    if ($_POST)
    {
        if(empty($_POST["nome"]))
        {
            $msg[0] = "O nome é obrigatório.";
            $erro = true;
        }

        if(empty($_POST["email"]))
        {
            $msg[1] = "O e-mail é obrigatório.";
            $erro = true;
        }

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

        if(!$erro)
        {
            $user = new User
            (
                $_POST["nome"],
                $_POST["email"],
                $_POST["senha"]
            )
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

<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <title>Cadastro</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/styles.css">
    </head>

    <body>
        <h1>Cadastre-se</h1>

        <form>
            <label>Nome:</label>
            <input type="text" name="nome" value="">
            <br>

            <label>E-mail:</label>
            <input type="email" name="email" value="">
            <br>

            <label>Senha:</label>
            <input type="password" name="senha" value="">
            <br>

            <label>Confirme a senha:</label>
            <input type="password" name="confirmaSenha" value="">
            <br>

            <input type="submit" value="Cadastrar">
        </form>
    </body>

</html>