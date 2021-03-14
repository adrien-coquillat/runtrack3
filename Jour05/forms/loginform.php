<?php
require_once('../src/config/userclass.php');
$msg = "";
if (isset($_POST['submit'])) {

    if ($_POST['password'] == $_POST['cpassword']) {
        $newuser = new user();
        $msg = "";


        // $newuser->register($login, $password);
        $msg = $newuser->register($_POST['prenom'], $_POST['nom'], $_POST['email'], $_POST['password']);

        if ($msg == '') {
            // header('Location: ../index.php');
        }
    }
}
?>
<div class='conteneur-inscription'>
    <form method='post' class=''>


        <div class='ligneform'>
            <label for="prenom">Prenom:</label>
            <input type="text" id="prenom" name="prenom">
        </div>
        <div class='ligneform'>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom">
        </div>
        <div class='ligneform'>
            <label for="email">email:</label>
            <input type="text" id="email" name="email">
        </div>
        <div class='ligneform'>
            <label for="mdp">Mot de passe:</label>
            <input type="password" id="mdp" name="password">
        </div>
        <div class='ligneform'>
            <label for="mdp">Confirmation du mot de passe:</label>
            <input type="password" id="cmdp" name="cpassword">
        </div>
        <input type="submit" name="submit">
        <?php
        if ($msg != '') {
            echo '<p style="color: red;">' . $msg . '</p>';
        }
        ?>
    </form>
</div>