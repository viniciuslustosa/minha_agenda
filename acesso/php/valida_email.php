<?php
    include("conexao.php");

    function valida_email($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    $email = $_POST['email'];
    if(valida_email($email)){
        try{
            $query = "SELECT * FROM usuario WHERE email = :email";

            $retorno = $conexao->prepare($query);
            $retorno->bindValue(':email',$email);

            $retorno->execute();
            $num = $retorno->rowCount();

            if($num == 0) {
                echo "Email Válido";
            } else {
                echo "Email já está em uso!";
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
    } else {
        echo "Email não é válido!";
    }
?>