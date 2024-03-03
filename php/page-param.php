<?php
// Récupération des paramètres URL
$nom = "";
$messageErreur = "";
if (isset($_GET["nom"])) {
    $nom = $_GET["nom"];
} else {
    $messageErreur = "Le paramètre nom n'est pas présent dans l'URL";
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
    <title>Paramètres URL</title>
</head>
<body class="bg-light">
<!--Insertion d'un menu-->
<?php include_once '../_partials/menu.php' ?>
<div class="container">
    <h1 class="my-3 text-warning text-center">Récupération des paramètres URL</h1>
    <div class="d-flex mt-5 ">
        <i class="bi bi-1-square fs-3 text-warning me-3"></i>
        <h3 class="border-bottom border-warning border-1">Contexte</h3>
    </div>
    <div>
        <p>
            Pour récupérer les paramètres d'URL, il faut utiliser la supergloblale <span
                    class="text-success fs-4">$_GET</span>.
        </p>
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-3 text-center me-4">
                <p class="fs-1">Rappel</p>
            </div>
            <div class="col-7 bg-dark  rounded-3 p-3 shadow">
                <p>
                    Appel de la page
                </p>
                <pre class="bg-primary border rounded-4 text-white-50 fw-bold">
                <code>
                    &lt;a href="page-param.php?nom=dupond"&gt;Lien vers page-param&lt;/a&gt;
               </code>
               </pre>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mt-5 ">
            <div class="col-3 text-center me-4">
                <p class="fs-1">Récupération du paramètre </p>
            </div>
            <div class="d-flex col-7 bg-dark  rounded-3 p-3 shadow">
                <i class="bi bi-filetype-exe fs-2 text-warning text-bold"></i>
                <div class="bg-black rounded-4 p-3 flex-fill">
                    <!-- Votre code -->
                    <?php if ($messageErreur) : ?>
                        <p class="text-danger fw-bold"><?= $messageErreur ?></p>
                    <?php else : ?>
                        <p>Le paramètre nom est : <?= $nom ?></p>
                    <?php endif; ?>

                </div>
            </div>
        </div>

    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>