<?php
    include_once "Utente.php";
    include_once "Sicurezza.php";
    include_once "LoginDAO.php";
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

            return Sicurezza::isEmailValid($utente->getEmail());
        }

        public static function testUsername(){
            $utente = new Utente("Fabio","password","mimmi.Il.Pizzaiolo@gmail.com");
            return LoginDAO::checkUsername($utente->getUsername());
        }
    

}

?>