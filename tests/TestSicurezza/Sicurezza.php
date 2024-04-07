<?php

class Sicurezza{

    public static function creaPassword(string $password){
        return crypt($password,"Password");
    }
    public static function isEmailValid(string $email){
        return preg_match_all("/(@)\\.{0,}/",$email);
    }
}
?>