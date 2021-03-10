$('#buttonmelanger').click(function () {

    var parent = $("#image");

    var divs = parent.children();
    while (divs.length) {
        parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
    }
});


$('#ranger').click(function () {

    var parent = $("#image");

    var divs = parent.children();

})
// var image1 = document.getElementById("image1");
// console.log(image1);
// var image2 = document.getElementById("image2");
// console.log(image2);
// var image3 = document.getElementById("image3");
// console.log(image3);
// var image4 = document.getElementById("image4");
// console.log(image4);
// var image5 = document.getElementById("image5");
// console.log(image5);
// var image6 = document.getElementById("image6");
// console.log(image6);


// var temp1 = document.getElementById("image1").innerHTML;
// var temp2 = document.getElementById("image2").innerHTML;
// var temp3 = document.getElementById("image3").innerHTML;
// var temp4 = document.getElementById("image4").innerHTML;
// var temp5 = document.getElementById("image5").innerHTML;
// var temp6 = document.getElementById("image6").innerHTML;
// console.log(temp1);

// rangement1 = document.getElementById("rangees1");
// rangement2 = document.getElementById("rangees2");
// rangement3 = document.getElementById("rangees3");
// rangement4 = document.getElementById("rangees4");
// rangement5 = document.getElementById("rangees5");
// rangement6 = document.getElementById("rangees6");


// rangement1.innerHTML = image1.innerHTML;
// image1.innerHTML = temp1;
// console.log(temp1);

// rangement2.innerHTML = image2.innerHTML;
// image2.innerHTML = temp2;

// rangement3.innerHTML = image3.innerHTML;
// image3.innerHTML = temp3;

// rangement4.innerHTML = image4.innerHTML;
// image4.innerHTML = temp4;

// rangement5.innerHTML = image5.innerHTML;
// image5.innerHTML = temp5;

// rangement6.innerHTML = image6.innerHTML;
// image6.innerHTML = temp6;

// $('#image1').empty();
// $('#image2').empty();
// $('#image3').empty();
// $('#image4').empty();
// $('#image5').empty();
// $('#image6').empty();


// });

$('#image1').click(function () {
    var image1 = document.getElementById("image1");
    var temp1 = document.getElementById("image1").innerHTML;
    rangement = document.getElementById("rangees");
    rangement.innerHTML = image1.innerHTML;
    image1.innerHTML = temp1;
    $('#image1').empty();
})

$('#image2').click(function () {
    var image2 = document.getElementById("image2");
    var temp2 = document.getElementById("image2").innerHTML;
    rangement = document.getElementById("rangees");
    rangement.innerHTML = image2.innerHTML;
    image2.innerHTML = temp2;
    $('#image2').empty();
})

$('#image3').click(function () {
    var image3 = document.getElementById("image3");
    var temp3 = document.getElementById("image3").innerHTML;
    rangement = document.getElementById("rangees");
    rangement.innerHTML = image3.innerHTML;
    image3.innerHTML = temp3;
    $('#image3').empty();
})