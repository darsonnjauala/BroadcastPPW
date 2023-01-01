<?php
    include_once('conexao.php');
    if(!$sessao->esta_logado())
    header('location:login.php');
    $usuarios=listagem();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestao de Usuarios</title>
    </head>
    <body>
        <span style="float:right"><?= $sessao->user_name ?></span>
        <form method="post">
            <input type="submit" name="sair" value="Sair" style="float:right"/>
        </form>
        <?php include_once('menu.php'); ?>
        <h3>Lista de Contactos da Minha Agenda</h3>
        <table border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Opcao</th>

                    <th><a href="criarUsuario.php">+</a></th>
                </tr>
            </thead>
            
            <?php if(count($usuarios)==0){ ?>
                <tr><td colspan=6>Agenda de Contactos Vazia</td></tr>
            <?php }else{ ?>
                
            <?php for($i=0;$i<count($usuarios);$i++){ ?>
                <tr>
                    <td><?= $usuarios[$i]['id'] ?></td>
                    <td><?= $usuarios[$i]['nome'] ?></td>
                    <td><?= $usuarios[$i]['email'] ?></td>

                    <td colspan=2>
                    <form method="post">
                        <input type="hidden" name="id" value="<?= $usuarios[$i]['id'] ?>" />
                        <button type="submit" name="remover">Remover</button>
                    </form>
                    <a href="editarUsuario.php?id='<?= $usuarios[$i]['id'] ?>'">Editar</a></td>
                </tr>
            <?php } } ?>
        </table>
        <?php

            if(isset($_POST['remover']))
            {
                remocao($_POST['id']);
            }elseif(isset($_POST['sair'])){
                $sessao->logout();
                header('location:login.php');
            }
        ?>
    </body>
</html>