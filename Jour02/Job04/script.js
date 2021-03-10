// Créez un textarea dont l’id est “keylogger”. Chaque fois que l’utilisateur
// tape une lettre sur son clavier (a-z), celle-ci est ajoutée dans le textarea
// (même si le focus en cours n’est pas le textarea). Si c’est le cas, la lettre
// doit être ajoutée deux fois.




var textarea = document.getElementById('keylogger');

document.addEventListener('keypress', addCharacter);

function addCharacter(e) {
    console.log(e.key);
    textarea.value = textarea.value + e.key;
    // textarea.value = e.key + e.key;

}