$('#buttonmelanger').click(function () {

    var parent = $("#image");

    var divs = parent.children();
    while (divs.length) {
        parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
    }
});




$('img').click(changement)
console.log($('#image1').click(changement))
$('#img').click(changement)
$('#img').click(changement)
$('#img').click(changement)
$('#img').click(changement)
$('#img').click(changement)


// var image2 = document.getElementById('image2');
// image2.addEventListener("click", changement)

function changement() {
    $(this).appendTo('#rangees')
}


$('img').click(function (event) {
    console.log(event.target.id); //Affiche enfantDeMaDiv
    console.log(this.id); //Affiche maDiv
});