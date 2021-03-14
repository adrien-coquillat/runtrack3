<header>
    <?php
    require_once('../src/config/userclass.php');
    if (isset($_GET['d'])) {
        session_destroy();
        // header('Location: index.php');
    }

    ?>
    <?php
    if (!isset($_SESSION['user'])) { ?>
        <a href="../pages/inscription.php">Inscription</a>
        <a href="../pages/connexion.php">Connexion</a>
    <?php } else {
        echo 'Bienvenue à toi ' . $_SESSION['user']['login'] . ' ton id est ' . $_SESSION['user']['id']; ?>
        <a href="modifiersonprofil.php">modifier</a>
        <a href="?d">Disconnect</a>
        <a href="planning.php">Planning</a>
    <?php }

    ?>
</header>