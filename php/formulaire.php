<?php
// On vérifie que le formulaire a été soumis
$prenom = null;
$nom = null;
$email = null;
$erreurs = []; // Initialisation du tableau des erreurs
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["btn_valider"])) {
    // On récupère les données du formulaire
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $email = $_POST["email"];

    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    if (empty($prenom)) {
        $erreurs["prenom"] = "Le prénom est obligatoire";
    }
    if (empty($nom)) {
        $erreurs["nom"] = "Le nom est obligatoire";
    }
    if (empty($email)) {
        $erreurs["email"] = "L'email est obligatoire";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs["email"] = "L'email n'est pas valide";
    }

    // Si il n'y a pas d'erreurs
    if (empty($erreurs)) {
        // Insertion des données dans la base de données db_sio1-database-intro table etudiant
        $pdo = new PDO("mysql:host=localhost;dbname=db_sio1-database-intro;charset=utf8", "root", "");
        $sql = "INSERT INTO etudiant (prenom_etudiant, nom_etudiant, email_etudiant) VALUES (:prenom, :nom, :email)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":prenom" => $prenom,
            ":nom" => $nom,
            ":email" => $email
        ]);

        header("Location: ../index.php");
        exit();
    }
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
    <title>PHP-Formulaires</title>
</head>
<body>
<!--Insertion d'un menu-->
<?php include_once '../_partials/menu.php' ?>
<div class="container">
    <h1 class="my-5 text-warning text-center">Les formulaires</h1>
    <div class="w-75 mx-auto my-6 p-4 shadow">
        <form action="" method="post" novalidate>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom*</label>
                <input type="text"
                       class="form-control"
                       name="prenom"
                       id="prenom" aria-describedby="prenomHelp"
                       value="<?= $prenom ?>">
                <?php if (isset($erreurs['prenom'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs["prenom"] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom*</label>
                <input type="text" class="form-control" name="nom" id="nom" aria-describedby="nomHelp"
                       value="<?= $nom ?>">
                <?php if (isset($erreurs['nom'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs["nom"] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email*</label>
                <input type="email"
                       class="form-control <?= isset($erreurs['email']) ? "border border-2 border-danger" : "" ?>"
                       name="email" id="email" aria-describedby="emailHelp"
                       value="<?= isset($erreurs['email']) ? "" : $email ?> ">
                <?php if (isset($erreurs['email'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs["email"] ?></p>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary" name="btn_valider">Valider</button>
        </form>
    </div>
</div>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>