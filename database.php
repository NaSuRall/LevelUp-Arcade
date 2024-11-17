<?php

function Getbdd()
{
    $servername = "localhost";
    $username = "root";
    $password = "1012";
    $dbname = "LevelUp";

    try {
        $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bdd;
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}


?>