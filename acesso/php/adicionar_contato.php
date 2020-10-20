<?php
    session_start();

    include("conexao.php");
    $id_user = intval($_SESSION['userId']);
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = strtolower($_POST['email']);
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $pais = $_POST['pais'];
    $telFixo = $_POST['telF'];
    $telMovel = $_POST['telM'];
    
    try{
        $query = 'INSERT INTO contato(id_usuario, nome_contato, sobrenome_contato, email_contato, endereco_contato, bairro_contato, cidade_contato, estado_contato, pais_contato, tel_fixo, tel_movel) values (:idUser,:nome,:sobrenome,:email,:endereco,:bairro,:cidade,:estado,:pais,:telFixo,:telMovel)';
  
        $retorno = $conexao->prepare($query);
        
        $retorno->bindValue(':idUser',$id_user);
        $retorno->bindValue(':nome',$nome);
        $retorno->bindValue(':sobrenome',$sobrenome);
        $retorno->bindValue(':email',$email);
        $retorno->bindValue(':endereco',$endereco);
        $retorno->bindValue(':bairro',$bairro);
        $retorno->bindValue(':cidade',$cidade);
        $retorno->bindValue(':estado',$estado);
        $retorno->bindValue(':pais',$pais);
        $retorno->bindValue(':telFixo',$telFixo);
        $retorno->bindValue(':telMovel',$telMovel);
  
        $retorno ->execute();

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