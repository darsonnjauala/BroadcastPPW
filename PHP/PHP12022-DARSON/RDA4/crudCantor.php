<?php
    $server = "localhost";
    $username = "root";
    $password = "74r80N";
    $database = "Musica";
    
    // Create connection
    $conexao = mysqli_connect($servername, $username, $password, $database);
    
    

    if(mysqli_connect_error()){
	    Die("Erro de conexao com base de dados " . mysqli_connect_error() . "(" . mysqli_connect_error() . ")" );
    }else{
        $sqlSelect = "SELECT * FROM cantor";
        $querySelect = mysqli_query($conexao ,$sqlSelect);

        if($querySelect){
            $lista = array();
            while($ctr = mysqli_fetch_assoc($querySelect)){
                echo "Nome: " . $ctr['Nome'];
                
                echo "<br> Inicio de Carreira: " . $ctr['InicioDeCarreira'];
                
                echo "<br> Data de Nascimento: " . date("d/m/Y", strtotime($ctr['DataDeNascimento']));

                echo "<br>Nacionalidade: " . $ctr['Nacionalidade'];
                
                echo "<br>Genero De Musica: " . $ctr['GeneroDeMusica'];

                echo "<br>______________________<br>";
            }
        }

        $sqlInsert = "insert into cantor(Nome, InicioDaCarreira, DataNascimento, Nacionalidade, GeneroDeMusica) values ('Nasty C', '2007', '06-04-1995', 'Sul-Africano', 'Rap')";
        $queryInsert = mysqli_query($conexao, $sqlInsert);
        if($queryInsert){
            echo "<br>Cantor Inserido com sucesso";
        }else{
            echo "<br>Ocorreu um problema ao inserir o Cantor";
        }

        $sqlSelect = "SELECT * FROM cantor WHERE Nome LIKE 'Nasty C'";
        $querySelect = mysqli_query($conexao, $sqlSelect);
        if($querySelect){
            $ctr = mysqli_fetch_assoc($querySelect);
            $nome = "NastyC";
            $sqlUpdate = "UPDATE cantor SET Nome = '{$nome}' where id = '{$ctr['id']}'";
            $queryUpdate = mysqli_query($conexao, $sqlUpdate);
            if($queryUpdate){
                echo "<br Actualizado com sucesso";
            }else{
                echo "<br Ocorreu um problema ao actualizar";

            }
        }

        $sqlDelete = "Delete from cantor where id = 3";

        $queryDelete = mysqli_query($conexao, $sqlDelete);

        if($queryDelete){
            echo "<br Apagado com sucesso";
        }else{
            echo "<br Ocorreu um problema ao apagar";

        }
    }

    mysqli_close($conexao);

?>