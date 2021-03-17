$(document).ready(function () {

    $("#submit_connexion").click(function () {

        var mail = $('#email').val();
        var password = $('#mdp').val();
        console.log(password);

        // alert(password);

        $.ajax({
            url: "../pages/traitementconnect.php", // on donne l'URL du fichier de traitement
            type: "post", // la requête est de type POST
            data: ({
                email: mail,
                password: password
            }), // et on envoie nos données
            success: function (response) {
                console.log(response);

                // response = response.replace(/\s/g, ''); //enleve les espaces


                if (response.valueOf().trim() == "success") {
                    console.log("ok");
                    //window.location.href = '../index.php';

                } else {
                    alert('error');
                }
            }
        });

    });

});