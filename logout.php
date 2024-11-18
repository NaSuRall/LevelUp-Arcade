<?php
session_start(); // Reprendre la session existante

// Supprimer toutes les variables de session
session_unset();

// Détruire la session
session_destroy();

// Rediriger vers la page d'accueil ou de connexion
header("Location: index.php");
exit;
?>
