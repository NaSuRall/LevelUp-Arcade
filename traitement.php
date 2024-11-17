<?php

    require_once "./database.php";
    session_start();
    $bdd = GetBdd();

// FORMULAIRE CONNEXION

    if(isset($_POST["ok"])){

        $email = $_POST["email"];
        $pseudo = $_POST["pseudo"];
        $mdp = $_POST["mdp"];

        $requete = $bdd->prepare("INSERT INTO users VALUES (0, :email, :pseudo, :mdp)");
        $requete->execute(
            array(
                "email"=> $email,
                "pseudo" => $pseudo,
                "mdp" => $mdp,
            )
        );

        echo"Vous etes connecté !";
        header("Location: ./login.php");
    }



    // FORMULAIRE INSCRIPTION
if (isset($_POST["envoie"])) {

    $email = $_POST["email"];
    $mdp = $_POST["mdp"];

    // Vérification des entrées
    if (!empty($email) && !empty($mdp)) {
        $requete = $bdd->prepare("SELECT * FROM users WHERE email = :email AND mdp = :mdp");
        $requete->execute([
            ":email" => $email,
            ":mdp" => $mdp
        ]);


        $user = $requete->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            // Stocker les données utilisateur dans la session
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['pseudo'] = $user['pseudo'];
            // Redirection après connexion réussie
            header("Location: index.php");
            exit();
        } else {
            echo "Email ou mot de passe incorrect.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>