<?php
    include("conexao.php");
    
    try{
        $id = $_POST['id'];
        $query = "DELETE FROM usuario WHERE id_usuario = :id";
        
        $retorno = $conexao->prepare($query);

        $retorno->bindValue(':id',$id);


        $retorno ->execute();
        //$lista =  $retorno->fetchAll(PDO::FETCH_NUM);
        //$lista =  $retorno->fetchAll(PDO::FETCH_OBJ);
        echo "Usuário Excluido com Sucesso!";
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