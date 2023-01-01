<?php
    include_once('conexao.php');
    if(!$sessao->esta_logado()){
        header('location:login.php');
        $id=$_GET['id'];
        $usuario=encontra($id);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    </head>
    <body>
        <span style="float:right"><?= $sessao->user_name ?></span>
        <form method="post">
            <input type="submit" name="sair" value="Sair" style="float:right"/>
        </form>
        <?php include_once('menu.php'); ?>
        <h3>Editar Usuario</h3>
        <form method="post">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" value="<?= $usuario['nome']?>"/></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" value="<?= $usuario['email']?>" /></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input type="password" name="senha" value="<?= $usuario['senha'] ?>" /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Editar" name="gravar"/></td>
                    <td><input type="submit" value="Cancelar" name="cancelar"/></td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_POST['gravar']))
            {
                if(!empty($_POST['nome']) && !empty($_POST['senha']) &&
                !empty($_POST['email']))
                {
                    edicao($id,$_POST['nome'],$_POST['email'],$_POST['senha']);
                }
            }elseif(isset($_POST['sair'])){
                $sessao->logout();
                header('location:login.php');
            }
            if(isset($_POST['cancelar'])){
                header('location:usuario.php');
            }
        ?>
    </body>
</html>