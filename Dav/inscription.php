<?php
  require 'functions/registerModel.php';
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
    <title>inscription</title>
</head>
<body>
    <?php require 'views/navbarD.php';?>
    <br>
    <div class="container">
      <div class="formulaire">
            <h1 class="text-center">Inscription</h1><br>
            <form action="" method="post">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" value="<?= $name ?>" id="name" name="name" placeholder="entrer votre nom">
                        <small class="text-danger"><?= $nameError ?></small>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="fName">Prenom</label>
                        <input type="text" class="form-control" id="fName" name="fName" placeholder="entrer votre prenom">
                        <small class="text-danger"><?= $fNameError ?></small>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="num">Contact</label>
                        <input type="number" class="form-control" id="num" name="num" placeholder="entrer votre contact">
                        <small class="text-danger"></small>
                    </div>
                    <div class="form-group">
                      <label for="mail">Mail</label>
                      <input type="email" class="form-control" id="mail" name="mail" placeholder="entrer votre mail">
                      <small class="text-danger"><?= $mailError ?></small>
                    </div>
                    <div class="form-group">
                        <label for="statut">Statut</label>
                        <select name="statut" id="statut" class="form-control">
                            <option value="1" selected='selected'>Entrepreneur/Entreprise</option>
                            <option value="2">Client</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="mdp">Mot de passe</label>
                      <input type="password" class="form-control" id="mdp" name="mdp" placeholder="creer votre mot de passe">
                      <small class="text-danger"><?= $mdpError ?></small>
                    </div>
                    <div class="form-group">
                       <label for="mdp2">Confirmer mot de passe</label>
                       <input type="password" class="form-control" id="mdp2" name="mdp2" placeholder="confirmer votre mot de passe">
                       <small class="text-danger"></small>
                    </div>
                    <a href="" class="btn">Annuler</a>
                <button class="btn" type='submit'>Valider</button>
                  </form>
              </div>
    </div><br><br>
    <?php require 'views/footer.php';?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>