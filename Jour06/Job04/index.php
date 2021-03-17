<!-- Reprenez vos fichiers index.php et style.css. Ajoutez en haut de la page,
un header qui contient une liste de trois liens : Accueil, Présentation,
Contact. Lorsque la résolution est inférieure ou égale à 767. Les liens
disparaissent pour laisser place à un hamburger button. Lorsque l’on clique
sur celui-ci, les liens apparaissent. Si on re-clique, les liens disparaissent. -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <header class="header1">
        <button>
            <div class="burger"></div>
            <div class="burger"></div>
            <div class="burger"></div>
        </button>
    </header>
    <header class="header2">
        <a href="">Accueil</a>
        <a href="">Présentation</a>
        <a href="">Contact</a>
    </header>
    <div class="bodysection">
        <section class="section"></section>
        <section class="section"></section>


        <section class="section"></section>
        <section class="section"></section>
    </div>
</body>

</html>