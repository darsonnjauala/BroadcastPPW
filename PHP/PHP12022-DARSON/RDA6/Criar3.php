<?php 
    include_once('Conexao3.php');
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
        <h3>Cadastro de novo Contacto</h3>
        <form method="post">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" style="width:300px" /></td>
                </tr>
                <tr>
                    <td>Contacto</td>
                    <td><input type="number" name="contacto" /></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Gravar" name="gravar"/></td>
                    <td><input type="submit" value="Cancelar" name="cancelar"/></td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_POST['gravar'])){
                if(!empty($_POST['nome']) && !empty($_POST['contacto']) && !empty($_POST['email'])){
                    $contacto=new Contacto(null,$_POST['nome'],$_POST['contacto'],$_POST['email']);
                    criacao($contacto);
                }
            }
            if(isset($_POST['cancelar'])){
                header('location:Index3.php');
            }
        ?>
    </body>
</html>