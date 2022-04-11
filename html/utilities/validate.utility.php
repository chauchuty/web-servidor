<?php

    function isAdmin($session){
        return $session == 1 ? true : false;
    }
    
    function isEmpty($value)
    {
        return $value == '';
    }
    
    function isInteger ($value)
    {
        return is_numeric($value) && is_int($value + 0);
    }

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
        return filter_var($email, FILTER_VALIDATE_EMAIL) ? true : false;
    }

    function isLink ($link) {
        return filter_var($link, FILTER_VALIDATE_URL) ? true : false;
    }

    function isSigla ($sigla) {
        return preg_match('/^[a-zA-Z]{3}/', $sigla);
    }
