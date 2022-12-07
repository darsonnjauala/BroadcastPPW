<?php
    $id=$_GET['id'];
    $conexao=mysqli_connect("localhost","root","74r80N","agenda");
    $sql="select * from contacto where id=".$id;
    $result=mysqli_query($conexao,$sql);
    $contacto=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Novo Contacto</title>
    </head>
    <body>
        <h3>Editar Contacto</h3>
        <form method="post">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" value="<?= $contacto['nome'] ?>"/></td>
                </tr>
                <tr>
                    <td>Contacto</td>
                    <td><input type="number" name="contacto" value="<?= $contacto['contacto'] ?>" /></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" value="<?= $contacto['email'] ?>" /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Editar" name="gravar"/></td>
                    <td><input type="submit" value="Cancelar" name="cancelar"/></td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_POST['gravar'])){
                if(!empty($_POST['nome']) && !empty($_POST['contacto']) && !empty($_POST['email'])){
                    $nome=$_POST['nome'];
                    $email=$_POST['email'];
                    $contacto=$_POST['contacto'];
                    $sql="update contacto set nome='{$nome}',
                    contacto={$contacto}, email='{$email}' where id={$id}";
                    $result=mysqli_query($conexao, $sql);
                    if($result){
                        header('location:index.php');
                    }else {
                        echo "Ocorreu um erro ao atualizar os dados";
                    }
                }
            }
            if(isset($_POST['cancelar'])){
                header('location:index.php');

            }
        ?>
    </body>
</html>