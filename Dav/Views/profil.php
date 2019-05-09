<?php
  session_start();
  
  if ($_POST) {
    require '../functions/database.php';
    $db = Database::connect();
    $req = $db->prepare('INSERT INTO message (idUser, sms) VALUES (?, ?)');
    $req->execute([$_SESSION['id'], $_POST['sms']]);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
	<title>profil</title>
</head>
<body>
  <?php include './navbarC.php';?>

    <section>
        <div class="container">
            <div class="row">
                <div class="">
                <img src="images/logo.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
    <div class="container">
        <div class="cover_profile">
            <div class="cover">
                <img src="../images/profil.jpg" alt="">
            </div>
            <div class="profile">
                <img src="../images/1.jpg" alt="">
            </div>
            <div class="name">
            <h1><?= $_SESSION['firstname']?> <?= $_SESSION['name']?></h1>
            </div>
        </div>
    </div><br><br><br><br><br><br><br><br><br><br>
    <div class="upload">
        <form action="" method="post">
          <h4>Laisser un message</h4>
            <textarea name="sms" id="sms" cols="150" rows="5" required placeholder="Envoyer un message"></textarea>
            <button type="submit" class="btn btn-lg btn-outline-info">Envoyer</button>
        </form>
    </div>
    </section><br><br>


          <?php require './footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>