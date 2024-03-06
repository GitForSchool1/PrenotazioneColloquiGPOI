<?php

class Sicurezza{

    public function creaPassword(string $password){
        return crypt($password,"Password");
    }
    public function isEmailValid(string $email){
        return preg_match("(@).{0,}",$email);
    }
}
?>