<?php 
    include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Agenda de Contactos - Login</h3>
    <form method="post">
        <table>
            <tr>
                <td>email:</td>
                <td><input type="email" name="email" /></td>
            </tr>
            <tr>
                <td>senha</td>
                <td><input type="password" name="senha" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Entrar" name="entrar"/></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['entrar']))
        {
            if(!empty($_POST['senha']) && !empty($_POST['email']))
            {
                login($_POST['email'],$_POST['senha']);
            }
        }
    ?>
</body>
</html>