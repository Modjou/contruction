<?php
    require_once 'functions/database.php';
    $db = Database::connect();

    if (isset($_GET['supp']) && !empty($_GET['supp'])) {
        $id = $_GET['supp'];
        $del = $db->prepare('DELETE FROM users WHERE id = ?');
        $ok = $del->execute([$id]);
    }

    $query = $db->prepare('SELECT * FROM users');
    $query->execute([]);
    $users = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Table des utilisateurs</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenoms</th>
                <th>Contacts</th>
                <th>mail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
            <tr>
                <td><?= $user['name']?></td>
                <td><?= $user['firstname']?></td>
                <td><?= $user['contact']?></td>
                <td><?= $user['mail']?></td>
                <td><a href="dashboard.php?supp=<?= $user['id']?>" class="btn btn-danger">Supprimer utilisateur</button></td>
            </tr>
            <?php } ?>

        </tbody>
    </table>
</body>
</html>