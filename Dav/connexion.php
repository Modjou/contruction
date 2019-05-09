<?php 
    require 'functions/connexionModel.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Connexion</title>
</head>
<body>
<?php require 'views/navbarD.php';?>
<br><br>
    <div class="container">
            <div class="formulaire">
            <h1 class="text-center">Connexion</h1><br>
            <form action="" method="post">
                <div class="form-group">
                    <label for="mail">Mail</label>
                    <input type="email" class="form-control" id="mail" name="mail" value="<?= $mail ?>" placeholder="entrer votre mail">
                    <small class="text-danger"><?= $mailError ?></small>
                </div>
                <div class="form-group">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" class="form-control" id="mdp" name="mdp" value="<?= $mdp ?>" placeholder="creer votre mot de passe">
                    <small class="text-danger"><?= $passError ?></small>
                </div>
                <input type="submit" value="Valider" class="btn">
                <a href="index.php" class="btn">Retour</a>
                
            </form>
            </div>
    </div><br><br>
    <?php require 'views/footer.php';?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>