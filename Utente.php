<?php
class Utente{
    private ?string $username=null;
    private ?string $password=null;
    private ?string $email = null;

    public function getEmail(){
        return $this->email;
    }
    public function setEmail(string $email){
        $this->email = $email;
    }

    public function __construct(?string $username, ?string $password,?string $email){
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

    public function getUsername():string{
        return $this->username;
    }
    public function setUsername(string $username){
        $this->username=$username;
    }

    public function getPassword():string{
        return $this->password;
    }
    public function setPassword(string $password){
        $this->password=$password;
    }

}
?>