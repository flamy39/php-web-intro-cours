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
    <h1 class="my-3 text-warning text-center">Paramètres URL</h1>
    <div class="d-flex mt-5 ">
        <i class="bi bi-1-square fs-3 text-warning me-3"></i>
        <h3 class="border-bottom border-warning border-1">Contexte</h3>
    </div>
    <div>
        <p>
            Lorsque l'on souhaite accéder à une ressource (page PHP), on peut lui transmettre des informations sous la
            forme de <span class="fs-4 text-success">paramètres d'URL</span> (query parameters).
        </p>
        <p class="text-center border border-2 border-warning p-2">Le format d'une URL est le suivant <br>
            <span class="text-success fs-2">protocole://domaine:port/nom_ressource.php?param=valeur</span> <br>
            <span class="text-success fs-2">protocole://domaine:port/nom_ressource.php?param1=valeur&amp;param2=valeur</span>
            <br>
        </p>
        <p>
            Les paramètres sont donc directement passés dans l'URL !
        </p>
        <div class="row justify-content-center align-items-start mt-5">
            <div class="col-3 text-center me-4">
                <p class="fs-1">Exemple sous la forme d'un lien</p>
            </div>
            <div class="col-7 bg-dark  rounded-3 p-3 shadow">
            <pre class="bg-primary border rounded-4 text-white-50 fw-bold">
                <code>
                    &lt;a href="page-param.php?nom=dupond"&gt;Lien vers page-param&lt;/a&gt;
                </code>

            </pre>
                <div class="d-flex">
                    <i class="bi bi-filetype-exe fs-2 text-warning text-bold"></i>
                    <div class="bg-black rounded-4 p-3 flex-fill">
                        <!-- Votre code -->
                        <a href="page-param.php?nom=dupond">Lien vers page-param</a>
                        <!-- Votre code (apparence d'un bouton) -->
                        <a href="page-param.php?nom=dupond" class="btn btn-primary rounded rounded-2">Lien vers
                            page-param</a>

                    </div>
                </div>
                <div class="d-flex">
                    <i class="bi bi-filetype-exe fs-2 text-warning text-bold"></i>
                    <div class="bg-black rounded-4 p-3 flex-fill">
                        <!-- Votre code -->
                        <a href="page-param.php?nom=dupond&prenom=pierre">Lien vers page-param</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex mt-5 ">
            <i class="bi bi-2-square fs-3 text-warning me-3"></i>
            <h3 class="border-bottom border-warning border-1">Récupérer les paramètres</h3>
        </div>
        <p>
            La page appelée va devoir récupérer les paramètres passés dans l'URL. <br>
            PHP nous met à disposition un tableau prédéfini : la superglobale <span
                    class="text-success fs-4">$_GET</span>. <br>
            <span class="text-success fs-4">$_GET </span>est un tableau associatif contenant les données passées via
            l'URL (les paramètres).
        </p>
        <p>
            <span class="text-success fs-4">$_GET </span> est automatiquement créé et initialisé avec les paramètres
            d'URL présent dans la requête HTTP émise. <br>
            Le tableau est alors directement disponible dans le code PHP de la page qui pourra accéder aux
            paramètres d'URL transmis.
        </p>
        <p class="text-center border border-2 border-warning p-2">
            <span">Correspondance</span><br>
            <span class="text-success fs-2">nom_ressource.php?param1=valeur&amp;param2=valeur</span>
            <br>
            <span class="text-white fs-4">
                $_GET = [ "param1" => valeur, "param2" => valeur ]
            </span>
        </p>

    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>