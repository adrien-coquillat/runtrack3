<!-- Créez un fichier index.php contenant les balises html de base (doctype,
html, head, body). Créez quatre fichiers de style :
- style1.css : modifie la couleur du background en #88c1d0.
- style2.css : modifie la couleur du background en #ffca4b.
- style3.css : modifie la couleur du background en #275fa0.
- style4.css : modifie la couleur du background en #ffffff.
Dans votre code html, linkez la bonne feuille de style en fonction de la
largeur de l’écran de l’utilisateur : style1.css par défaut, style2.css lorsque
la résolution est comprise entre 1680px et 1920px, style3.css entre 1280px
et 1680px, et style4.css lorsqu’elle est inférieure à 1280.
HTML suffit, vous pouvez oublier php. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="module.css" />
    <link rel="stylesheet" href="style1.css" />
    <link rel="stylesheet" media="screen and (max-height: 1680px) and (max-width: 1920px)" href="style2.css" />
    <link rel="stylesheet" media="screen and (max-height: 1280px) and (max-width: 1680px)" href="style3.css" />
    <link rel="stylesheet" media="screen and (max-height: 1280px) and (max-width: 1280px)" href="style4.css" />
</head>

<body>

</body>

</html>