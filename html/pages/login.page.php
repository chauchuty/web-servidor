<?php include('../components/header.php') ?>

    <main class="login-img">
    </main>
    <main class="login">
    <img src="../assets/images/img-logo.webp" alt="" class="login-img">
        <div class="login-container">
            <h1 class="login-title">Login</h1>
            <form action="./../gateway.php" method="post" class="login-form">
                <input hidden name="operation" value="login" />
                <input class="login-input" type="email" placeholder="e-mail" name="email" autocomplete="off">
                <span class="login-input-border"></span>

                <input class="login-input" type="password" placeholder="senha" name="password" autocomplete="off">
                <span class="login-input-border"></span>

                <button class="login-submit">Login</button>
                <a href="#" class="login-reset">Esqueceu sua senha?</a>

                <p class="login-without">Ainda não possui uma conta? <a href="#">Crie uma</a></p>
            </form>
        </div>
    </main>
    </div>
    
<?php include('../components/footer.php') ?>
