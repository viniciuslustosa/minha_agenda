<?php
    include("conexao.php");
    $id = $_POST['id'];
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
        $query = "UPDATE contato SET nome_contato = :nome, sobrenome_contato = :sobrenome, email_contato = :email, endereco_contato = :endereco, bairro_contato = :bairro, cidade_contato = :cidade, estado_contato = :estado, pais_contato = :pais, tel_fixo = :telFixo, tel_movel = :telMovel WHERE id_contato = :id";
  
        $retorno = $conexao->prepare($query);

        $retorno->bindValue(':id',$id);
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
  
        $retorno->execute();
        echo var_dump($_POST);

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