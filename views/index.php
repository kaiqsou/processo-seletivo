<?php 

    require_once "../models/User.class.php";
    require_once "../validations/validations.php";

?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <title>Cadastro</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    
    <body>
        <?php if ($alert) 
        {
            echo "<script>
                  alert('Nome: {$user -> getNome()}\\nE-mail: {$user -> getEmail()}\\nSenha: {$user -> getSenha()}\\n');
                  </script>";
        }
        ?>
        <div class="wrapper">
            <h2>Cadastre-se</h2>

            <form action="#" method="post">

                <div class="input-field">
                <label>Nome:</label>
                <input type="text" name="nome" value=<?php echo $nome ?>>
                </div>
                <span class="error"><?php echo $msg[0] ?></span>
                <br>

                <div class="input-field">
                <label>E-mail:</label>
                <input type="email" name="email" value=<?php echo $email ?>>
                </div>
                <span class="error"><?php echo $msg[1] ?></span>
                <br>

                <div class="input-field">
                <label>Senha:</label>
                <input type="password" name="senha" value=<?php echo $senha ?>>
                </div>
                <span class="error"><?php echo $msg[2] ?></span>
                <br>

                <div class="input-field">
                <label>Confirme a senha:</label>
                <input type="password" name="confirmaSenha" value=<?php echo $confirmaSenha ?>>
                </div>
                <span class="error"><?php echo $msg[3] ?></span>
                <br>

                <input class="btn" type="submit" value="Cadastrar">

            </form>
        </div>
    </body>

</html>