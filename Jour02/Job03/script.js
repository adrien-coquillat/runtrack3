// Créez un button ayant comme id “button”. Créez un article ayant comme id
// “compteur” et contenant “0”. Ce contenu doit évoluer proportionnellement
// au nombre d'événements click reçu par le bouton. Vous ne devez pas
// utiliser “onclick()” dans votre html. La fonction permettant d’effectuer la
// modification doit s'appeler “addone()”.


var button = document.getElementById('button');
var compteur = document.getElementById('compteur');

button.addEventListener('click', addone);

function addone() {
    var nbclick = compteur.innerHTML;
    nbclick++;
    compteur.innerHTML = nbclick;

}