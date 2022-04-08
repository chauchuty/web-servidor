<?php include('../components/header.php') ?>

    <main class="login-img">
    </main>
    <main class="login">
    <img src="../assets/images/img-logo.webp" alt="" class="login-img">
        <div class="login-container">
            <h1 class="login-title">Cadastrar</h1>
            <form action="./../gateway.php" method="post" class="login-form">
                <input hidden name="operation" value="cadastrar" />

                <input class="login-input" type="text" placeholder="nome" name="nome" autocomplete="off">
                <span class="login-input-border"></span>

                <input class="login-input" type="email" placeholder="e-mail" name="email" autocomplete="off">
                <span class="login-input-border"></span>

                <input class="login-input" type="password" placeholder="senha" name="senha" autocomplete="off">
                <span class="login-input-border"></span>

                <button class="login-submit">Cadastrar</button>
                <p class="login-without"><a href="./login.page.php">Voltar para página de login</a></p>
            </form>
        </div>
    </main>
    </div>
    
<?php include('../components/footer.php') ?>
