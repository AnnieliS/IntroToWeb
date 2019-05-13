
/*-------Ex1-------
(function () {
    var button = document.getElementById("Buttom");

    button.onclick = changy;

    
    function changy() {
        var title = document.getElementById("tit");
        
        title.innerHTML = "New";
    }
})();



window.onload = function () {
    var name2check = "Annieli";
    document.getElementById("stringCheck").innerHTML = "<h1>" + name2check + "</h1>";
}

function nameCheck(name2String) {
    if (nameString.indexOf("A") != -1)
    nameString = "Hello" + nameString.substring(0,1);
    else{
        nameString = "Goodbye" + nameString.substring(nameString.lenght-1, nameString.lenght);
    }

    console.log('Output: ',nameString);
    return nameString;
}

*/

// $("document").ready(function() {
//     console.log("hello world using JQuery!");
// });


// $("body").append("<button>Clickme</button>");

// $("button").click(function () {
//     $('h1').text("Goodbye World")
//     $('h1').css('color', '#c4c4c4');

//     $('img').attr('src', 'images/Annie_Tatt_1.png')
// });

// $('img').hover(function () {
//     $(this).css({
//         'height': '50px',
//         'width': '50px'

//     })

// })

// var input = $('input: checkbox' ).hide();


$("input:checkbox").hide()