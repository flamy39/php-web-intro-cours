<?php

$motPasse = null;
$motPasseHash = null;
// Récupération des données du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["btn_valider"])) {
    $motPasse = $_POST['motPasse'];
    $motPasseHash = password_hash($motPasse, PASSWORD_DEFAULT);
}

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
    <title>Mots de passe</title>
</head>
<body>
<!--Insertion d'un menu-->
<?php include_once '../_partials/menu.php' ?>
<div class="container">
    <h1 class="my-5 text-warning text-center">Les formulaires</h1>
    <div class="w-75 mx-auto my-6 p-4 shadow">
        <form action="" method="post" novalidate>
            <div class="mb-3">
                <label for="mot-passe" class="form-label">Mot de passe*</label>
                <input type="password"
                       class="form-control"
                       name="motPasse"
                       id="mot-passe" aria-describedby="passwordHelp"
                       value="<?= $motPasse ?>">
                <?php if (isset($erreurs['motPasse'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs["motPasse"] ?></p>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary" name="btn_valider">Valider</button>
        </form>
        <p><?= $motPasseHash ?></p>
    </div>
</div>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>