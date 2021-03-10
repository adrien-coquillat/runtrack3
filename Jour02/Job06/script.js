page = document.getElementsByTagName("body")[0]
var text = "";

document.addEventListener('keydown', codekonami);

function codekonami(e) {
    var code = e.key;
    text += code;
    if (text == "ArrowUpArrowUpArrowDownArrowDownArrowLeftArrowRightArrowLeftArrowRightba") {
        page.style.backgroundColor = "black";

    }
    console.log(text)


}


// const div = document.getElementById('div');
// window.addEventListener('keydown', function (event) {
//     var key = event.key;
//     text += key;
//     if (text == "ArrowUpArrowUpArrowDownArrowDownArrowLeftArrowRightArrowLeftArrowRightba") {
//         div.style.display = "block";

//     }
//     console.log(text);
// })