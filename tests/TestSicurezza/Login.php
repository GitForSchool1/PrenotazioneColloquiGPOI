<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            
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
        <input type="submit" value="Invia">
    </form>
</body>
</html>