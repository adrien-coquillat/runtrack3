<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<body>
    <?php
    if (!isset($_SESSION['user'])) { ?>
        <a href="inscription.php">Inscription</a>
        <a href="connexion.php">Connexion</a>
    <?php } else {
        echo 'Bienvenue à toi ' . $_SESSION['user']; ?>
        <a href="?d">Disconnect</a>

    <?php }

    ?>
    <div class='conteneur-connexion'>

        <div class='ligneform'>
            <label for="email">email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div class='ligneform'>
            <label for="mdp">Mot de passe:</label>
            <input type="password" id="mdp" name="password">
        </div>

        <button id="submit_connexion" name="btn_email">valider</button>


    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../Js/script.js"></script>
</body>

</html>