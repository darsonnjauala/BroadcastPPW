<?php
    include_once("Contacto.php");
    $conexao=mysqli_connect("localhost","root","74r80N","agenda");
    function listarObjectos(){
        global $conexao;
        $contactos=array();
        $sql="select * from contacto";
        $result=mysqli_query($conexao,$sql);
        if($result){
            while($rs=mysqli_fetch_assoc($result)){
                $contacto=new Contacto($rs['id'],$rs['nome'],$rs['contacto'],$rs['email']);
                array_push($contactos, $contacto);
            }
        }
        return $contactos;
    }

    function criacao($contacto){
        global $conexao;
        $sql="select * from contacto where contacto={$contacto->getContacto()} or
        email='{$contacto->getEmail()}'";
        $result=mysqli_query($conexao,$sql);
        if(mysqli_num_rows($result)>0){
            echo "O contacto ou email ja existem na agenda";
        }else{
            $sql="insert into contacto(nome, contacto, email) values('{$contacto->getNome()}','{$contacto->getContacto()}','{$contacto->getEmail()}')";
            $result=mysqli_query($conexao,$sql);
            if($result){
                header('location:Index3.php');
            }else{
                echo "Ocorreu um erro ao gravar os dados";

            }
        }
    }
    function remocao($id){
        global $conexao;
        $sql="delete from contacto where id=".$id;
        $result=mysqli_query($conexao,$sql);
        header('location:Index3.php');
    }
    function edicao($contacto){
        global $conexao;
        $sql="update contacto set nome='{$contacto->getNome()}', contacto={$contacto->getContacto()}, email='{$contacto->getEmail()}' where id={$contacto->getId()}";
        $result=mysqli_query($conexao,$sql);
        if($result){
            header('location:Index3.php');
        }else{
            echo "Ocorreu um erro ao atualizar os dados";

        }
    }

    function encontra($id){
        global $conexao;
        $sql="select * from contacto where id=".$id;
        $result=mysqli_query($conexao,$sql);
        $rs=mysqli_fetch_assoc($result);
        $contacto=new Contacto($id,$rs['nome'],$rs['contacto'],$rs['email']);
        return $contacto;
    }
?>