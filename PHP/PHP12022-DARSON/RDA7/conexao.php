<?php
    include_once('sessao.php');
    $conexao=mysqli_connect("localhost","root","74r80N","agenda");
    if(!$sessao->esta_logado()){
        header("location:login.php");
    }
    function listagem()
    {
        global $conexao;
        $contactos=array();
        $sql="select * from contacto";
        $result=mysqli_query($conexao,$sql);
        if($result)
        {
            while($rs=mysqli_fetch_assoc($result))
            {
                array_push($contactos,$rs);
            }
        }
        return $contactos;
    }
    function criacao($nome,$contacto,$email)
    {
        global $conexao;
        $sql="select * from contacto where contacto={$contacto} or email={$email}";
        $result=mysqli_query($conexao,$sql);
        if($result)
        {
            echo "O contacto ou email ja existem na agenda";
        }else{
            $sql="insert into contacto
            values(null,'{$nome}',{$contacto},'{$email}')";
            $result=mysqli_query($conexao,$sql);
            if($result)
            {
                header('location:index2.php');
            }else{
                echo "Ocorreu um erro ao gravar os dados";
            }
        }
    }
    function remocao($id)
    {
        global $conexao;
        $sql="delete from contacto where id=".$id;
        $result=mysqli_query($conexao,$sql);
        header('location:index2.php');
    }
    function edicao($id,$nome,$contacto,$email)
    {
        global $conexao;
        $sql="update contacto set nome='{$nome}', contacto={$contacto}, email='{$email}' where id={$id}";
        $result=mysqli_query($conexao,$sql);
        if($result)
        {
            header('location:index2.php');
        }else{
            echo "Ocorreu um erro ao atualizar os dados";
        }
    }
    function encontra($id)
    {
        global $conexao;
        $sql="select * from contacto where id=".$id;
        $result=mysqli_query($conexao,$sql);
        return mysqli_fetch_assoc($result);
    }
    function login($email,$senha)
    {
        global $conexao;
        global $sessao;
        $sql="select * from usuario where email='{$email}' and
        senha='{$senha}'";
        $result=mysqli_query($conexao,$sql);
        if($result){
            $utilizador=mysqli_fetch_assoc($result);
            if($utilizador['email']==$email && $utilizador['senha']==$senha){
                $sessao->login($utilizador);
                echo "Bem Vindo {$utilizador['nome']}";
                header('location:index2.php');
            }else{
                echo "Erro! Senha e/ou email incorreto(s)";
            }
        }else{
            echo "Erro! Senha e/ou Nuit incorrecto(s)";
        }
    }
?>