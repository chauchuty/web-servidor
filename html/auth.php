<?php
    session_start();

    if(!$_SESSION){
        header('Location: ./login.page.php');
        die();
    }
?>