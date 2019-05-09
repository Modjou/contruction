<?php
session_start();
$mail = $mdp = $mailError = $pass = $passError = $reg = '';
$connexion = true;

require 'verify.php';
require_once 'database.php';


if(!empty($_POST)) {
    $mail = Verify::input($_POST['mail']);
    $pass = Verify::input($_POST['mdp']);
    $passCrypted = sha1($pass);
    if(empty($mail)) {
        $mailError = 'votre mail';
        $connexion = false;
    } else {
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $mailError = 'Veuillez entrer un mail valide';
            $connexion = false;
        }
    }

    $db = Database::connect();
    $statement = $db->prepare('SELECT * FROM users WHERE mail = ?');
    $statement->execute([$mail]);
    $user = $statement->fetch();

    if(!$user) {
        $mailError = 'Ce compte n\'existe pas';
        $reg = 'Cliquez ici pour vous inscrire';
        $connexion = false;
    } else {

        if($pass != $user['mdp'] && $passCrypted != $user['mdp']) {
            $passError = 'mot de passe incorrect';
            $connexion = false;
        }
    }

    if($connexion) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['mail'] = $user['mail'];
        $_SESSION['contact'] = $user['contact'];
        $_SESSION['statut'] = $user['statut'];

        header("Location: Views/profil.php");
    }
}



