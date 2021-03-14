<?php
require_once("src/config/userclass.php");
session_start();


// var_dump($reservation->createResa('adhzazudj', 'dzd;qzdqdqz', '2021-03-12 08:00:00', '2021-03-12 09:00:00', 1));



require_once('src/config/userclass.php');
if (isset($_GET['d'])) {
    session_destroy();
    // header('Location: index.php');
}

?>
<?php
if (!isset($_SESSION['user'])) { ?>
    <a href="pages/inscription.php">Inscription</a>
    <a href="pages/connexion.php">Connexion</a>
<?php } else {
    echo 'Bienvenue à toi ' . $_SESSION['user']['login'] . ' ton id est ' . $_SESSION['user']['id']; ?>
    <a href="?d">Disconnect</a>

<?php }
var_dump($_SESSION['user']);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>