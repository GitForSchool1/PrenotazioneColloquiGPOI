<?php
    class LoginDAO{
        public static function checkUsername(){
            /*Dovrebbe controllare con una Regex il nome utente per evitare una injection */
            return 1;
        }

        public static function createUser(){
            /*Non restituisce nulla */
            return;
        }

        public static function isUserAvaible(string $username){
            /*Ritorna falso se esiste un account con questo nome */
            
            return True;
        }
    }



?>