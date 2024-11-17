
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="formulaire">
            <h1>Sing in</h1>
            <div class="border"></div>
            <form action="traitement.php" method="POST">
                <input type="text" id="email" name="email" placeholder="Email">
                <input type="password" name="mdp" id="mdp" placeholder="Password">
                <span><input type="submit" id="envoie" name="envoie" value="Se Connecter"></span>
            </form>
            <a href="./inscription.php">Inscription</a>
        </div>
    </div>
</body>
</html>
