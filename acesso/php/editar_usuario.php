<?php
    include("conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $email_new = $_POST['email-new'];
    $senha = md5($_POST['senha']);
    
    try{
        $query = "UPDATE usuario SET";
        if($nome != "") {
            $query .= " nome_usuario = :nome";
        }
        if($senha != "") {
            $query .= ", senha_usuario = :senha";
        }
        if($email_new != "") {
            $query .= ", email = :email_new";
        }

        $query .= " WHERE email = :email";
        $retorno = $conexao->prepare($query);

        if($nome != "") {
            $retorno->bindValue(':nome',$nome);
        }
        if($senha != "") {
            $retorno->bindValue(':senha',$senha);
        }
        if($email_new != "") {
            $retorno->bindValue(':email_new',$email_new);
        }
        
        $retorno->bindValue(':email',$email);

        $retorno->execute();

        header('Location: ../painel?sucesso=userEdit');
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