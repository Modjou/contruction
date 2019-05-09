<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code d'accès</title>
</head>
<body>

        <p>Veuillez entrer le mot de passe pour obtenir les codes d'accès à l'administration:</p>
        <form action="admin.php" method="post">
            <p>
            <input type="password" name="mot_de_passe"/>
            <input type="submit" class="btn btn-lg btn-outline-info" value="Valider"/>
            </p>
        </form>
        <p>Cette page est réservée au personnel de CO-Entreprise. Si vous ne travaillez pas à Co-Entreprise, inutile d'insister vous ne trouverez jamais le mot de passe ! ;-)</p>
    
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "kangourou") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
        <h1>Voici les codes d'accès :</h1>
        <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>   
        
        <p>
        Cette page est réservée au personnel de CO-Entreprise. N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines.<br />
        CO-Entreprise vous remercie de votre visite.
        </p>
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
    
</body>
</html>