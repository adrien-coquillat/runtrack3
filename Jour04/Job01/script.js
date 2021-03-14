// Créez un button ayant comme id “button”. Créez un fichier expression.txt
// contenant votre expression favorite. Lorsqu’un utilisateur clique sur le
// bouton, à l’aide d’AJAX, récupérez le contenu du fichier expression.txt,
// placez le dans un paragraphe et insérez le dans le corps de votre page.


$("#button").click(function () {
    $.ajax({
        url: "expression.txt",
        type: 'GET',
        dataType: 'text',
    }).done(function (text) {
        $("#affichetext").append("<p>" + text + "</p>");
    });
});