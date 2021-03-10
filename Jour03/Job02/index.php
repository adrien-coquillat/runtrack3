<!-- Le but de ce job sera dans un premier temps de créer une balise button
ayant comme id “button”. Cette balise servira à mélanger l’ensemble des
images de l’arc-en-ciel. Par la suite, vous devrez faire en sorte qu’il soit
possible de remettre les images dans le bon ordre. Lorsque l’on clique sur
une image, elle doit changer de div.
Le bouton mélanger fait remonter les images présents dans la div
“rangees” et réorganise les images de façon aléatoire.
Une fois qu’il y a 6 images dans la div “rangees”, un message s’affiche en
dessous. Si l’arc-en ciel est bien reconstitué, le message “Vous avez
gagné” s’affiche en vert. Sinon, le message “Vous avez perdu” s’affiche en
rouge. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">

</head>

<body>
    <button id="buttonmelanger">melange</button>
    <button id="ranger">range</button>
    <div id="image">
        <img id="image1" src="arc1.png">
        <img id="image2" src="arc2.png">
        <img id="image3" src="arc3.png">
        <img id="image4" src="arc4.png">
        <img id="image5" src="arc5.png">
        <img id="image6" src="arc6.png">
    </div>
    <div id="rangees"></div>

</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>