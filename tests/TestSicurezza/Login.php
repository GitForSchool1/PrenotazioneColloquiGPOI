<!DOCTYPE html>
<html lang="en">
<head>
    <?php
<<<<<<< HEAD
        include_once "Sicurezza.php";
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST['btnInvia'])){
                $username = $_POST['txtUsername'];
                $password = Sicurezza::creaPassword($_POST['txtPassword']);
                $mail = Sicurezza::isEmailValid($_POST['txtEmail']);
                if($mail==1){
                    $ret = LoginDAO::login($mail,$username); 
                    /*
                    Da Implementare
                    Ritorna 
                    -> 1 se il login è ok (Username e mail sono corretti)
                    -> 0 se uno dei due è sbagliato
                    -> -1 se non esistono -> suggerisce la creazione di un account
                    
                    */
                    switch ($ret) {
                        case 1:
                            header("location: stuff.html"); //Da cambiare
                            break;
                        case 0:
                            echo "<h1>Mail o Password errati</h1>";
                            break;
                        case -1:
                            echo "<h1>L'account non esiste</h1>";
                            break;
                    }
                }
            }
=======
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            
>>>>>>> 5b2968d5a78d7d9e4369b4262f89a20b8bdcc07e
        }

    ?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post">
        <label >Username: </label>
        <input type="text" name="txtUsername">
        <br>
        <label >Password: </label>
        <input type="password" name="txtPassword">
        <br>
        <label >Email: </label>
        <input type="text" name="txtEmail">
        <br>
<<<<<<< HEAD
        <input type="submit" name="btnInvia" id="btnInvia" value="Invia">
=======
        <input type="submit" value="Invia">
>>>>>>> 5b2968d5a78d7d9e4369b4262f89a20b8bdcc07e
    </form>
</body>
</html>