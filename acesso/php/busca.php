<?php
  session_start();
  header('Content-Type: text/html; charset=utf-8');
  $idUser = $_SESSION['userId'];

  include("conexao.php");

  try{
    $text = "%" . $_POST['palavra'] . "%";
    if($text == ""){
      $query = "SELECT * FROM contato WHERE id_usuario = :id";
    } else {
      $query = "SELECT * FROM contato WHERE nome_contato LIKE :nome AND id_usuario = :id";
    }

    $retorno = $conexao->prepare($query);
    if($text != ""){
      $retorno->bindValue(':nome',$text);
    }
    $retorno->bindValue(':id',$idUser);

    $retorno->execute();

    $lista = $retorno->fetchAll(PDO::FETCH_ASSOC);
    //$lista =  $retorno->fetchAll(PDO::FETCH_NUM);
    //$lista =  $retorno->fetchAll(PDO::FETCH_OBJ);
	
    $color = "white_ctt";
    foreach($lista as $key => $value){
      echo '<div class="item_ctt ' . $color . '">';
      echo '<div class="nome_ctt">' . $value['nome_contato'] . " " . $value['sobrenome_contato'] . '</div>';
      echo '<div class="telefone_ctt">' . $value['tel_fixo'] . '</div>';
      echo '<div class="cidade_ctt">' . $value['cidade_contato'] . '</div>';
      echo '<button id="' . $value['id_contato'] . '" class="btn_item blue_button" onclick="exibeForm(\'edt-area\',\''. $value['id_contato'] . '\');">&#9998;</button>';
      echo '<button id="' . $value['id_contato'] . '" class="btn_item red_button" onclick="exibeForm(\'delete-area\',\''. $value['id_contato'] . '\');">&#10006;</button>';
      echo "</div>";
		if($color == "gray_ctt") {
			$color = "white_ctt";
		} else {
			$color = "gray_ctt";
		}
	}
	if($lista[0] == "") {
		echo '<div class="item_ctt ' . $color . '">';
		echo '<div class="nome_ctt">Nenhum contato foi encontrado...</div>';
		echo "</div>";
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
