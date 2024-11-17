<?php
include "./traitement.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form method="POST" action="traitement.php">
    <label for="email"> Votre e-mail</label>
    <input type="text" id="email" name="email" placeholder="Entrez votre e-mail...">
    <label for="pseudo"> Votre Pseudo</label>
    <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo...">
    <label for="mdp"> Votre pass</label>
    <input type="password" id="mdp" name="mdp" placeholder="Entrez votre pass...">
    <input type="submit" name="ok">
</form>
</body>
</html>
