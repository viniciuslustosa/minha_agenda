<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Agenda - Login</title>
    <link type="text/css" rel="stylesheet" href="css/styleIndex.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
</head>
<body>
    <div class="card-login">
        <div class="card-item logo">
            <img class="logo-senai" src="img/LogoMinhaAgenda.png" alt="Logo Minha Agenda" width="300px">
        </div>
        <div class="card-item">
            <form class="cardForm" action="acesso/php/valida_login.php" method="post">
                <p class="textForm">Login:</p>
                <div class="cardForm">
                    <input type="text" name="login" id="userText" required><br>
                </div>
                <p class="textForm">Senha:</p>
                <div class="cardForm">
                    <input type="password" name="senha" id="passText" required>
                </div>
                <?php if(isset($_GET['login']) && $_GET['login']=='erro'){ //Verifica se houve erro no login do usuário?>

                    <p class="msgErro">Usuário ou senha inválida!</p>

                <?php } ?>
                <div class="cardForm">
                    <button class="cardButton" type="submit">ENTRAR</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>