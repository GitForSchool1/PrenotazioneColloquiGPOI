<?php
    include_once "Utente.php";
    include_once "Sicurezza.php";
<<<<<<< HEAD
    include_once "LoginDAO.php";
=======
>>>>>>> 5b2968d5a78d7d9e4369b4262f89a20b8bdcc07e
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
<<<<<<< HEAD

            return Sicurezza::isEmailValid($utente->getEmail());
        }

        public static function testUsername(){
            $utente = new Utente("Fabio","password","mimmi.Il.Pizzaiolo@gmail.com");
            return LoginDAO::checkUsername($utente->getUsername());
=======
            $sicurezza = new Sicurezza();

            return $sicurezza->isEmailValid($utente->getEmail());
>>>>>>> 5b2968d5a78d7d9e4369b4262f89a20b8bdcc07e
        }
    

}

?>