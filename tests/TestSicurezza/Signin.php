<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once "Sicurezza.php";
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST['btnInvia'])){
                $username = $_POST['txtUsername'];
                $password = Sicurezza::creaPassword($_POST['txtPassword']);
                $mail = Sicurezza::isEmailValid($_POST['txtEmail']);
                if($mail==1 && LoginDAO::isUserAvaible($username)==True){
                    LoginDAO::createUser($username,$password,$mail);
                    header("location:Login.php");
                }
            }
        }

    ?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
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
        <input type="submit" name="btnInvia" id="btnInvia" value="Invia">
    </form>
</body>
</html>