<?php
    include("conexao.php");
    
    try{
        $id = intval($_POST['id']);
        $query = "SELECT * FROM usuario WHERE id_usuario = :id";

        $retorno = $conexao->prepare($query);
        $retorno->bindValue(':id',$id);
        $retorno->execute();
        $lista = $retorno->fetchAll(PDO::FETCH_ASSOC);
        //$lista =  $retorno->fetchAll(PDO::FETCH_NUM);
        //$lista =  $retorno->fetchAll(PDO::FETCH_OBJ);
        
        foreach($lista as $key => $value){
            echo $value['nome_usuario'] . ";" . $value['email'] . ";" . $value['id_usuario'];
        }
    }  
    catch(PDOException $e){
        echo '<BR>Erro: ' . $e->getCode();
        echo '<BR>Mensagem: ' . $e->getMessage();
        echo '<BR>Arquivo: ' . $e->getFile();
        echo '<BR>Linha: ' . $e->getLine();
    }
    catch(Error $e){
        echo '<BR>Erro: ' . $e->getCode();
        echo '<BR>Mensagem: ' . $e->getMessage();
        echo '<BR>Arquivo: ' . $e->getFile();
        echo '<BR>Linha: ' . $e->getLine();
    }
?>