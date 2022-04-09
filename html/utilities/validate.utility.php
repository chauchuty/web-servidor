<?php

    function isFullName ($fullName) {
        if (strlen($fullName) < 3) {
            return false;
        }
        return true;
    }

    function isPasswordValid($password) {
        return strlen($password) >= 8;
    }

    function isEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
?>