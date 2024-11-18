<?php

function Getbdd()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "levelup";

    try {
        $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bdd;
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}


?>