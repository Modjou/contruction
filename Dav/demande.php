<?php
	require 'functions/database.php';
	const PATH = 'uploads';
	$bud = $taille = $local = $style = $model = $budError = $imgErr ='';
	if (isset($_POST) && !empty($_POST)) {
		$db = Database::connect();
		extract($_POST, EXTR_OVERWRITE);
		$target_dir = "uploads";

		$file = $_FILES['model'];
		$check = getimagesize($file['tmp_name']);

		if ($check) {
			$target_file = $target_dir . basename($file["name"]);
			if (move_uploaded_file($file["tmp_name"], $target_file)) {
				$nameFile = basename($file['name']);
				$req = $db->prepare('INSERT INTO demande (budget, taille, local, type, img) VALUES (?, ?, ?, ?, ?)');
				$ok = $req->execute([$bud, $taille, $local, $type, $nameFile]);

			}	
		} else {
			$imgErr = 'Ceci n\'est pas une image';
		}

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
    <link rel="stylesheet" href="./styles.css">
	<title>Demande</title>
</head>
<body>
	<div class="container">
		<div class="formulaire">
		<form action="" method="post" enctype='multipart/form-data'>
			<div class="form-group">
                <label for="bud">Budget:</label>
                <input type="number" class="form-control" step='10000' min="0" value="<?= $bud ?>" id="bud" name="bud" placeholder="entrer votre budget" required>
                <small class="text-danger"><?= $budError ?></small>
            </div>
            <div class="form-group">
            	<label for="taille">Taille du terrain :(Si vous-en avez)</label>
				<input type="text" class="form-control" value="<?= $taille ?>" id="taille" name="taille" placeholder="entrer la taille du terrain" required>
            </div>
            <div class="form-group">
            	<label for="local">Où est situé votre terrain ?</label>
				<input type="text" class="form-control" value="<?= $local ?>" id="local" name="local" placeholder="entrer la localite du terrain" required>
            </div>
            <div class="form-group">
            	<label for="style">Veuillez choisir le style de maison que vous souhaitez</label>
            	<select name="type" id="type">
            		<option value="1">Duplex</option>
            		<option value="2">Maison basse</option>
            		<option value="3">Studio</option>
            		<option value="4">Triplex</option>
            	</select>
			</div>
			<div class="form-group">
            	<label for="model">Veuillez entrer le model en photo de la maison que vous désirez:</label>
				<input type="file" class="form-control" value="<?= $model ?>" id="model" name="model" required>
				<small class='text-danger'><?= $imgErr ?></small>
			</div>
			<a href="Views/index.php" class="btn">Retour</a>
            <button class="btn" type='submit'>Valider</button>
		</form>
		</div>
	</div>
	<script sr bc="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>