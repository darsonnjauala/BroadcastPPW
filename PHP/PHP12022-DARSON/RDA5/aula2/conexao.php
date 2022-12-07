<?php
    $conexao=mysqli_connect("localhost","root","74r80N","agenda");
    $contactos=array();
    $sql="select * from contacto";
    $result=mysqli_query($conexao, $sql);
    if($result){
        while($rs=mysqli_fetch_assoc($result)){
            array_push($contactos, $rs);
        }
    }
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
            <!-- Vamos criar um link para adicionar novo registo -->
            <th><a href="criar.php">+</a></th>
            </tr>
        </thead>
        <!--Colocamos uma condicao pra verificar se a lista esta vazia -->
        <?php if(count($contactos)==0){ ?>
            <tr>
                <td colspan=6>Agenda de Contactos Vazia</td>
            </tr>
        <?php }else{ ?>
        <?php for($i=0; $i<count($contactos); $i++){ ?>
            <tr>
                <td><?= $contactos[$i]['id'] ?></td>
                <td><?= $contactos[$i]['nome'] ?></td>
                <td><?= $contactos[$i]['contacto'] ?></td>
                <td><?= $contactos[$i]['email'] ?></td>
                <td colspan=2>
                    <form method="post">
                    <input type="hidden" name="id" value="<?=
                    $contactos[$i]['id'] ?>" />
                    <button type="submit" name="remover">Remover</button>
                    </form>
                    <a href="editar.php?id='<?= $contactos[$i]['id']?>'">Editar</a>
                </td>
            </tr>
        <?php } } ?>
    </table>
    <?php
        if(isset($_POST['remover'])){
            $conexao=mysqli_connect("localhost","root","","agenda");
            $sql="delete from contacto where id=".$_POST['id'];
            $result=mysqli_query($conexao,$sql);
            header('location:index.php');
        }
    ?>
</body>
</html>