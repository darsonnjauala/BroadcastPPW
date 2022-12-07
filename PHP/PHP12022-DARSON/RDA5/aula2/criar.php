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
                    <td><input type="text" name="nome" /></td>
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
                    $conexao = mysqli_connect("localhost","root","74r80N","agenda");
                    $sql="select * from contacto where contacto=".$_POST['contacto']." or email=".$_POST['email'];
                    $result=mysqli_query($conexao, $sql);

                    if($result){
                        echo "O contacto ou email ja existem na agenda";
                    }else{
                        $nome=$_POST['nome'];
                        $email=$_POST['email'];
                        $contacto=$_POST['contacto'];
                        $sql="insert into contacto('nome', 'contacto', 'email') values('{$nome}','{$contacto}','{$email}')";
                        $result=mysqli_query($conexao, $sql);
                        if($result){
                            header('location:index.php');
                        }else{
                            echo "Ocorreu um erro ao gravar os dados";
                        }
                        echo "Clique no botao";
                }
            }
            if(isset($_POST['cancelar'])){
                header('location:index.php');

            }
        ?>
    </body>
</html>