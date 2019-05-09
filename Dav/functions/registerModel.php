<?php
    $name = $fName = $mail = $mdp1 = $mdp2 = $num = $nameError = $fNameError = $mailError = $mdpError = $numError = '';

if (!empty($_POST)) {
    require_once 'database.php';
    require_once 'verify.php';
    $isSuccess = true;

    $name = Verify::input($_POST['name']);
    $fName = Verify::input($_POST['fName']);
    $mail = Verify::input($_POST['mail']);
    $mdp1 = Verify::input($_POST['mdp']);
    $mdp2 = Verify::input($_POST['mdp2']);
    $statut =  Verify::input($_POST['statut']);
    $num = Verify::input($_POST['num']);

    if(empty($name)) {
        $nameError = 'Entrez un nom svp';
        $isSuccess = false;
    }

    if(empty($fName)) {
        $fNameError = 'Entrez un prenom svp';
        $isSuccess = false;
    }
    if(empty($mail)) {
        $nameError = 'Entrez un nom svp';
        $isSuccess = false;
    } else {
        if ( !filter_var($mail, FILTER_VALIDATE_EMAIL ))
        {
            $mailError = "Veuillez entrer un mail valide";
            $isSuccess = false;
        }
        else {

            $db = Database::connect();
            $result = $db->prepare('SELECT * FROM users WHERE mail = ?');
            $result->execute([$mail]);
            $result = $result->fetch();

            if(!empty($result)) {
                $mailError = 'un compte utilise deja ce mail !';
            }


        }
    }

//    mot de passe
    if((empty($mdp1) || empty($mdp2)) || (empty($mdp1) && empty($mdp2))) {
        $mdpError = 'Entrez votre mot de passe 2 fois';
        $isSuccess = false;
    }
    else {
        if($mdp1 != $mdp2) {
            $mdpError = "Les mots de passe ne correspondent pas";
            $isSuccess = false;
        }
        else {
            if(strlen($mdp1) < 8) {
                $mdpError = 'Le mot de passe doit etre constitue d\'au moins 8 caracteres';
                $isSuccess = false;
            }
        }
    }

    if($isSuccess) {
        $mdp1 = sha1($mdp1);
        $db = Database::connect();
        $add = $db->prepare('INSERT INTO users(name, firstname, mdp, contact, mail, statut) VALUES (?, ?, ?, ?, ?, ?)');
        $add->execute([$name, $fName, $mdp1, $num, $mail, $statut]);

        Database::disconnect();
        header("Location: connexion.php");

    }


}

