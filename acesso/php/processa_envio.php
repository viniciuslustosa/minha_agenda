<?php
    session_start();
    include_once("conexao.php");

    $valido = false;
    $para;
    // echo strtolower($_POST['para']);
    // prepara query e encontra email destinatario
    try {
        $query = "select * from contato where id_usuario = :idUser";

        $retorno = $conexao->prepare($query);
        $retorno->bindValue(":idUser", $_SESSION['userId']);

        $retorno->execute();
           
        $lista =  $retorno->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($lista as $key => $value)
        {
            if ($value['email_contato'] == strtolower($_POST['para'])) {
                $valido = true;
                $para = $value['email_contato'];
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
    
    require "../bibliotecas/PHPMailer/Exception.php";
    require "../bibliotecas/PHPMailer/OAuth.php";
    require "../bibliotecas/PHPMailer/PHPMailer.php";
    require "../bibliotecas/PHPMailer/POP3.php";
    require "../bibliotecas/PHPMailer/SMTP.php";

    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    
    class Mensagem{
        private $para = null;
        private $assunto = null;
        private $mensagem = null;

        public function __get($atrib){
            return $this->$atrib;
        }

        public function __set($atrib, $valor){
            $this->$atrib = $valor;
        }

        public function mensagemValida(){
            if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
                return false;
            } else {
                return true;
            }
        }
    }

    if ($valido) {
        $mensagem = new Mensagem();

        $mensagem->__set("para",$para);
        $mensagem->__set("assunto",$_POST["assunto"]);
        $mensagem->__set("mensagem",$_POST["mensagem"]);


        if(!$mensagem->mensagemValida()){
            header('Location: ../home?envio=false');
        } 

        $mail = new PHPMailer(true);

        try {
            //Configurações do servidor
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com"; // Host do email utilizado
            $mail->SMTPAuth = true;
            $mail->Username = ""; //Email utilizado no envio            
            $mail->Password = ""; //Senha Email
            $mail->SMTPSecure = "tls";
            $mail->Port = 587;

            //Destinatários
            $mail->setFrom("", $_SESSION["userName"]); //Email utilizado no envio  
            $mail->addAddress($mensagem->__get("para"));                   // EMAIL QUE RECEBE
        /*  $mail->addReplyTo()
            $mail->addCC()
            $mail->addBCC() */

            //Conteúdo
            $mail->isHTML(true);
            $mail->Subject = $mensagem->__get("assunto");
            $mail->Body = $mensagem->__get("mensagem");
            $mail->AltBody = "É necessário utilizar um cliente que suporte HTML";

            $mail->send();

            $mensagem->status['codigo_status'] = 1;
            $mensagem->status['descricao_status'] = "E=mail enviado com sucesso";

            //echo "<br>tudo certo<br>";
            header('Location: ../home?envio=true');
        }
        catch (Exception $e) {
            $mensagem->status['codigo_status'] = 2;
            $mensagem->status['descricao_status'] = "Não foi possível enviar este e-mail! Por favor tente novamente mais tarde. Detalhes do erro:" . $mail->ErroInfo;       
            //echo "<br>falha<br>";
        }
    } else {
        //echo "contato não encontrado";
        header('Location: ../home?envio=false');
    }
?>