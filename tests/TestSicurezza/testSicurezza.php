<?php
    include_once "Utente.php";
    include_once "Sicurezza.php";
    class testSicurezza{

        public static function testPassword(){
            $utente = new Utente("test","password","");
            $sicurezza = new Sicurezza();
            $password = $utente->getPassword();
            $username = $utente->getUsername();
            if(!password_verify(crypt("password","Password"),$sicurezza->creaPassword($utente->getPassword()))){
                return True;
            }
        }

        public static function testEmail(){
            $utente = new Utente("test","password","francesco.totti@gmail.com");
            $sicurezza = new Sicurezza();

            return $sicurezza->isEmailValid($utente->getEmail());
        }
    

}

?>