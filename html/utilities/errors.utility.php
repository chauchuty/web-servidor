<?php
        $error = isset($_GET['error']) ? $_GET['error'] : null;

        $errors = [
            "0" => "Internal Server Error",
            "1" => "Usuário ou Senha inválidos",
        ];

        function callError($type=''){
            global $errors;
            global $error;
            if ($error) {
                echo "<center><p>{$errors[$error]}</p></center>";
            }
        }
?>

<!-- login.php?error=1 -->