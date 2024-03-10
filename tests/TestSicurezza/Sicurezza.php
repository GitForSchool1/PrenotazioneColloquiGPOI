<?php

class Sicurezza{

<<<<<<< HEAD
    public static function creaPassword(string $password){
        return crypt($password,"Password");
    }
    public static function isEmailValid(string $email){
        return preg_match_all("/(@)\\.{0,}/",$email);
=======
    public function creaPassword(string $password){
        return crypt($password,"Password");
    }
    public function isEmailValid(string $email){
        return preg_match("(@).{0,}",$email);
>>>>>>> 5b2968d5a78d7d9e4369b4262f89a20b8bdcc07e
    }
}
?>