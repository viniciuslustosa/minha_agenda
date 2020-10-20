<?php
    session_start();

    include("conexao.php");
    $login;
    $senha;
    $valido = false;

    if((isset($_POST['login'])) && (isset($_POST['senha']))){
        $login = strtolower($_POST['login']);
        $senha = md5($_POST['senha']);
    }


    try{
        $query = "SELECT * FROM usuario WHERE email = :login";
        
        $retorno = $conexao->prepare($query);
        $retorno->bindValue(':login', $login);

        $retorno->execute();
        
        $lista =  $retorno->fetchAll(PDO::FETCH_ASSOC);  

        foreach($lista as $key => $value)
        {
            
            if ($value['email'] == $login && $value['senha_usuario'] == $senha) {
                $valido = true;
                $_SESSION['autenticado'] = true;
                $_SESSION['userId'] = $value['id_usuario'];
                $_SESSION['userName'] = $value['nome_usuario'];
                $_SESSION['userEmail'] = ($value['email']);
            }
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
    
    if ($valido && $_SESSION['userId'] == 1111111111) {
        // ALTERAR PARA header('Location: ../pesquisa.php');
        header('Location: ../painel');
    } elseif($valido) {
        header('Location: ../home');
    } else {
        header('Location: ../../index.php?login=erro');
    }
?>