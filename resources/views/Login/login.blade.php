<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #2f2f32;
            font-family: 'Poppins', sans-serif;
            color: blanchedalmond;
        }
        .container {
            text-align: center;
            margin-bottom: 20px;
        }
        h1 {
            font-size: 30px;
            color: #d33030e9;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #eee;
            color: #333;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
        }
        input[type="submit"]:hover {
            background-color: #ddd;
        }
        .go-to-site-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>REGISTER</h1>
    <form>
        <div class="form-group">
            <input type="text" class="form-control" id="nomeInput" placeholder="Nome">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="cognomeInput" placeholder="Cognome" maxlength="20">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="emailInput" placeholder="Email" maxlength="20">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="confirmPasswordInput" placeholder="Conferma Password" maxlength="20">
        </div>
        <input type="submit" class="btn btn-primary" value="Sign Up...">
    </form>
</div>

<div class="container">
    <h1 class="tert">LOGIN</h1>
    <form>
        <div class="form-group">
            <input type="text" class="form-control" id="emailInput" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Log In...">
    </form>
</div>

<a href="sitoDelLog.html" class="btn btn-primary go-to-site-button">Vai al sito</a>

</body>
</html>
