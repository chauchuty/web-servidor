<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('../components/header.php') ?>

    <main class="login-img">
        
    </main>
    <main class="login">
    <img src="../assets/images/img-logo.webp" alt="" class="login-img">
        <div class="login-container">
            <h1 class="login-title">Login</h1>
            <form action="./../gateway.php" method="post" class="login-form">
                <input class="login-input" type="email" placeholder="e-mail" name="username">
                <span class="login-input-border"></span>

                <input class="login-input" type="password" placeholder="senha" name="password">
                <span class="login-input-border"></span>

                <button class="login-submit">Login</button>
                <a href="#" class="login-reset">Esqueceu sua senha?</a>

                <p class="login-without">Ainda não possui uma conta? <a href="#">Crie uma</a></p>
            </form>
        </div>
    </main>
    </div>
    

<!--<form action="./../gateway.php" method="post">
    <input hidden name="operation" value="insertUsuario">
    Usuário:
    <input name="username"/>
    Senha:
    <input name="password"/>
    <button>Cadastrar</button>
</form>-->
</body>
</html>

