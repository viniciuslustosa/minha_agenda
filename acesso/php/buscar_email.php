<?php
    session_start();
    include("conexao.php");
    $email = "%" . $_POST['email'] . "%";
    $idUser = $_SESSION['userId'];

    $emailList = "";
    try{
        $query = "SELECT * FROM contato WHERE email_contato LIKE :email AND id_usuario = :id";

        $retorno = $conexao->prepare($query);
        $retorno->bindValue(':email',$email);
        $retorno->bindValue(':id',$idUser);
    
        $retorno->execute();
    
        $lista = $retorno->fetchAll(PDO::FETCH_ASSOC);

        foreach($lista as $key => $value){
            $emailList .= $value['email_contato'] . ";";
        }
        $emailList = substr($emailList, 0, -1);
        echo $emailList;
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