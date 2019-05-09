<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
    <title>Projet construction</title>
</head>
<body>
    
    <header>
        <?php include 'views/navbarD.php'; ?>
         <div class="welcom-text">
                <h2 class="text-center">Bienvenu chez <span style="color:#3B0405"><i>CO-Entreprise</i></span></h2>
                <h6> <span style="color:black"> Là où vos rêves deviennent réalité!!!</span> </h6>
                <a href="inscription.php" class="btn btn-lg btn-outline-info">M'inscrire</a>
                <a href="connexion.php" class="btn btn-lg btn-outline-primary">Me connecter</a>
            </div>
    </header>
    <br>
    <h3 class="text-center"><u>Qui sommes nous</u> ?</h3><br>
    <div class="col-md-16">
        <div class="card">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/entreprise.jpg" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Une entreprise immobilière</h5>
                        <p class="card-text">CO-Entreprise est une entreprise basée sur la construction des maisons. <br>Situé a Abidjan précisement Koumassi-divo, CO-Entreprise
                      met à disposition ses services les plus organisés et distingués pour permettre aux clients d'en sortir satisfait. <br>
                    CO-Entreprise est aussi ouverte pour les entreprises de construction car nous signons des parteneriats avec toutes entreprises desireuses de nous faire confiance. <br>
                  Alors n'attendez plus que vous soyez client, entrepreneur ou agence de construction CO-Entreprise est disposée à travailler avec vous....</p>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <h3 class="text-center"><u>Que faisons nous</u> ?</h3> <br>
    <div class="card-deck">
            <div class="card">
              <img src="images/contrat.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Nous vous aidons à avoir la maison dont vous rêvez</h5>
                <p class="card-text">Pour nous votre satisfaction est notre plaisir; alors nous mettons à votre disposition tout ce qui est nécéssaire pour que vous aillez votre maison. <br>
              Et que vous en soyez satisfait...</p>
              </div>
            </div>
            <div class="card">
              <img src="images/contrat2.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Signons des partenariats</h5>
                <p class="card-text">En effet etant une entreprise de construction, nous travaillons avec les agences de constructions, les grandes, moyennes et petites entreprises qui ont une vision un peu semblables 
                  au nôtre.</p>
              </div>
            </div>
            <div class="card">
              <img src="images/finance.jpg"  style="height: 300px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Nous vous aidons financièrement</h5>
                <p class="card-text">Pour ces personnes qui rêvent d'avoir un jour leur <strong>CHEZ-SOI</strong>, nous les aidons à avoir leurs maisons en leur apportant le financement nécéssaire. <br>Financement qu'ils
              remboursement avec un taux d'intérêt très faible..</p>
              </div>
            </div>
          </div><br>
          <h3 class="text-center"><u>Pourquoi nous choisir</u> ?</h3><br>
          <div class="col-md-16">
                <div class="card">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Nous marquons la différence dans notre travail</h5>
                                <p class="card-text">Notre entreprise est une entreprise de qualité supérieur car nous proposons des services incomparables pour vous permettre d'avoir votre maison tant attendu. <br>
                              N'hésitez plus, fites nous confiance : Nous sommes là pour vous!</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="images/presention1.jpg" class="card-img" alt="...">
                        </div>
                    </div>
                </div>
            </div><br>

            <!-- Footer -->
            <?= require 'views/footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>