<?php
    include_once("Conexao3.php");
    $contactos=listarObjectos();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Contactos</title>
    </head>
    <body>
        <h3>Lista de Contactos da Minha Agenda</h3>
        <table border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Contacto</th>
                    <th>Email</th>
                    <th>Opcao</th>
                    <th><a href="Criar3.php">+</a></th>
                </tr>
            </thead>
            <?php if(count($contactos)==0){ ?>
                <tr>
                    <td colspan=6>Agenda de Contactos Vazia</td>
                </tr>
                <?php }else{ ?>
                    <?php for($i=0;$i<count($contactos);$i++){ ?>
                        <tr>
                            <td><?= $contactos[$i]->getId() ?></td>
                            <td><?= $contactos[$i]->getNome() ?></td>
                            <td><?= $contactos[$i]->getContacto() ?></td>
                            <td><?= $contactos[$i]->getEmail() ?></td>
                            <td colspan=2>
                            <form method="post">
                                <input type="hidden" name="id" value="<?= $contactos[$i]->getId() ?>" />
                                <button type="submit" name="remover">Remover</button>
                            </form>
                            <a href="Editar3.php?id='<?= $contactos[$i]->getId()
                            ?>'">Editar</a></td>
                        </tr>
            <?php } } ?>
        </table>
        <?php
            if(isset($_POST['remover'])){
                $conexao=mysqli_connect("localhost","root","74r80N","agenda");
                remocao($_POST['id']);
            }
        ?>
    </body>
</html>