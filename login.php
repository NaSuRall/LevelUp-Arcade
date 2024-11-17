
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="traitement.php" method="POST">
            <label for="email">Email :</label>
            <input type="text" id="email" name="email" placeholder="Email">
            <label for="mdp">Mot de pase :</label>
            <input type="password" name="mdp" id="mdp">
            <input type="submit" id="envoie" name="envoie">
        </form>
        <a href="./inscription.php">Inscription</a>
    </div>
</body>
</html>
