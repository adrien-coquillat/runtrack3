<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script src="../Js/script.js"></script> -->

</head>

<body>
    <?php
    if (!isset($_SESSION['user'])) { ?>
        <a href="pages/inscription.php">Inscription</a>
        <a href="pages/connexion.php">Connexion</a>
    <?php } else {
        echo 'Bienvenue à toi ' . $_SESSION['user']; ?>
        <a href="?d">Disconnect</a>

    <?php }

    ?>
    <div class='conteneur-connexion'>
        <form method='post' action='traitementconnect.php' class=''>
            <div class='ligneform'>
                <label for="email">email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div class='ligneform'>
                <label for="mdp">Mot de passe:</label>
                <input type="password" id="mdp" name="password">
            </div>

            <input type="submit" id="submit_connexion" name="btn_email">
        </form>

    </div>


</body>

</html>