<?php

// Création de l’objet PDO
function dbconnect() {
    try{
        $db = new PDO('mysql:host=localhost;dbname=pageblog;charset=utf8', 'root', '',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        // echo 'Vous êtes connecté <br>';
        return $db;
    }catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
}