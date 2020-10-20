<?php
    include("conexao.php");
    
    try{
        $id = intval($_POST['id']);
        $query = "SELECT * FROM contato WHERE id_contato = :id";

        $retorno = $conexao->prepare($query);
        $retorno->bindValue(':id',$id);
        $retorno->execute();
        $lista = $retorno->fetchAll(PDO::FETCH_ASSOC);
        //$lista =  $retorno->fetchAll(PDO::FETCH_NUM);
        //$lista =  $retorno->fetchAll(PDO::FETCH_OBJ);
        
        foreach($lista as $key => $value){
            echo $value['nome_contato'] . ";" . $value['sobrenome_contato'] . ";" . $value['email_contato'] . ";" . $value['endereco_contato'] . ";" . $value['bairro_contato'] . ";" . $value['cidade_contato'] . ";" . $value['estado_contato'] . ";" . $value['pais_contato'] . ";" . $value['tel_fixo'] . ";" . $value['tel_movel'] . ";" . $value['id_contato'];
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