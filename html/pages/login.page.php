<?php
session_start();

if(isset($_SESSION['id'])){
    header("Location: ./home.page.php");
}



include('../components/header.php');
include('../utilities/erros.utility.php');
?>

<main class="login-img">
</main>
<main class="login">
    <img src="../assets/images/img-logo.webp" alt="" class="login-img">
    <div class="login-container">
        <h1 class="login-title">Login</h1>
        <form action="./../gateway.php" method="post" class="login-form">
            <input hidden name="operation" value="login" />
            <input class="login-input" type="email" placeholder="e-mail" name="email" autocomplete="off" value="cesar@gmail.com">
            <span class="login-input-border"></span>

            <input class="login-input" type="password" placeholder="senha" name="senha" autocomplete="off" value="010203">
            <span class="login-input-border"></span>

            <button class="login-submit">Login</button>


            <p class="login-without">
                <a href="./cadastro.page.php">Cadastrar!</a>
            </p>

        </form>
        <?php callError('primary') ?>
    </div>
</main>
</div>

<?php include('../components/footer.php') ?>