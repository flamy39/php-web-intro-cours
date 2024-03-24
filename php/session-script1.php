<?php
// Créer une session
session_start();   // Première instruction de la page

$_SESSION['prenom'] = 'Jean'; // Ajout d'une variable de session

// Création d'une variable de session "utilisateur"
$_SESSION['utilisateur'] = [
    'nom' => 'Doe',
    'prenom' => 'John',
    'email' => 'doe@test.fr'
];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../assets/css/vapor-bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gluten:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: 'Gluten', cursive;
        }
    </style>
    <title>PHP-Formulaires</title>
</head>
<body>
<!--Insertion d'un menu-->
<?php include_once '../_partials/menu.php' ?>
<div class="container">
    <h1 class="my-5 text-warning text-center">Les sessions</h1>
    <p>Création d'une session utilisateur</p>
    <p>ID de session : <?= session_id() ?></p>
    <p>Ajout d'une variable de session "prenom"</p>
    <p>Ajout d'une variable de session "utilisateur"</p>
    <p><a href="session-script2.php" class="btn btn-primary">Récupérer</a> les variables de session</p>
    <p><a href="session-script3.php?var=prenom" class="btn btn-danger">Supprimer</a> la variable de session "prenom"</p>
    <p><a href="session-script3.php?var=utilisateur" class="btn btn-danger">Supprimer</a> la variable de session
        "utilisateur"
    <p><a href="session-script3.php?var=toutes" class="btn btn-danger">Supprimer</a> toutes les variables de session
    <p><a href="session-script4.php" class="btn btn-danger">Supprimer</a> la session
    </p>
</div>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>