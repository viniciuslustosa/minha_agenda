<?php
    include("conexao.php");

    function valida_email($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    $nome = $_POST['nome'];
    $senha = md5($_POST['senha_add']);
    $rep_senha = md5($_POST['rep_senha_add']);
    $email = strtolower($_POST['email']);
    
    if($senha == $rep_senha && valida_email($email)) {
        try{
            $query = 'INSERT INTO usuario(nome_usuario, senha_usuario, email) values (:nome,:senha,:email)';

            $retorno = $conexao->prepare($query);
            
            $retorno->bindValue(':nome',$nome);
            $retorno->bindValue(':senha',$senha);
            $retorno->bindValue(':email',$email);

            $retorno ->execute();

            header('Location: ../painel');
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
    } else {
        header('Location: ../painel?erro=error');
    }

?>