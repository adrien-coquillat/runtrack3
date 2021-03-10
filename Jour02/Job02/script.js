// Créez une balise button ayant comme id “button”. Lorsque l’on clique
// dessus, un <article> contenant le texte suivant est ajouté au contenu de la
// page : “L'important n'est pas la chute, mais l'atterrissage.”. Si on clique à
// nouveau sur ce bouton, l’article disparaît. L’apparition / Disparition doivent
// être gérées dans une fonction nommée “showhide()”.

let button = document.getElementById("button");
console.log(button);

let article = document.getElementsByTagName("article")[0];
console.log(article);
button.addEventListener("click", showhide);



function showhide() {


    if (getComputedStyle(article).display != "none") {
        article.style.display = "none";
    } else {
        article.style.display = "block";
    }

}


// if (document)
//     let article = document.getElementById("article")
// }


// $(document).ready(function () {
//     //Dès qu'on clique sur #b1, on applique hide() au titre
//     $("#button1").click(function () {
//         $("article").hide();
//     });

//     //Dès qu'on clique sur #b1, on applique show() au titre
//     $("#button2").click(function () {
//         $("article").show();
//     });
// });