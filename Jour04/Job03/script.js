// Créez un formulaire permettant de trier ces données. Il doit contenir les
// champs suivant : id (input type text), nom (input type text), type (liste
// déroulante) et filtrer (input type button). Lorsque l’on clique sur “filtrer”, le
// script doit à l’aide d’AJAX, récupérer le contenu du fichier et lister les
// éléments répondant aux critères sélectionnés en les affichant sur une page
// HTML.
let id = $('#id')
let nom = $('#nom')
let type = $('#type')



$("#filtrer").click(() => {
    console.log(id.val());
    console.log(nom.val());
    console.log(type.val());
    let filter = [];
    console.log(id.val())
    // id.val() === "" ? filterType = 0

    if (id.val() != undefined && id.val().length > 0) {
        filter["type"] = 0;
        filter["filter"] = id.val()
    }
    if (nom.val() != undefined && nom.val().length > 0) {
        filter["type"] = 1;
        filter["filter"] = nom.val()
    }
    if (type.val() != undefined && type.val().length > 0) {
        filter["type"] = 2;
        filter["filter"] = type.val()
    }
    filtrage(filter)
})

function filtrage(filter) {
    console.log(filter)

    $.ajax({
        url: "script.json",
        type: 'GET',
        dataType: 'json',

    }).done(function (json) {
        switch (filter["type"]) {
            case 0:
                json.forEach(pokemon => {
                    if (pokemon.id == filter["filter"]) {
                        console.log(pokemon);
                    }
                });
                break;

            case 1:
                json.forEach(pokemon => {
                    if (pokemon.name.french.toLowerCase() == filter["filter"].toLowerCase()) {
                        console.log(pokemon);
                    }
                });
                break;

            case 2:
                json.forEach(pokemon => {
                    pokemon.type.forEach(element => {
                        if (element == filter["filter"]) {
                            console.log(pokemon);
                        }
                    });
                });

                break;
        }
    })
}