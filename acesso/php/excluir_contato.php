<?php
    include("conexao.php");
    session_start();
    $idUser = $_SESSION['userId'];
    
    try{
        $id = $_POST['id'];
        $query = "DELETE FROM contato WHERE id_contato = :id AND id_usuario = :idUser";
        
        $retorno = $conexao->prepare($query);

        $retorno->bindValue(':id',$id);
        $retorno->bindValue(':idUser',$idUser);


        $retorno ->execute();
        //$lista =  $retorno->fetchAll(PDO::FETCH_NUM);
        //$lista =  $retorno->fetchAll(PDO::FETCH_OBJ);
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