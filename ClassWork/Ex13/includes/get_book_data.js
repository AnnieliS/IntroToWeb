var bookName, bookPrice;

function getBookID() {
    var aKeyValue = window.location.search.substring(1).split('&');
    bookID = aKeyValue[0].split("=")[1];
    return bookID;

};


$(document).ready(function () {

    $.getJSON('data/books.json', function (data) {
        var bookID = getBookID();
        $.each(data.products, function (i, obj) {
            if (obj.id == bookID) {
                bookName = obj.name;
                bookPrice = obj.price;
                $('main').append("<img src='"
                + obj.image + "' alt='"
                + bookName + "' >");

            }
        });

        $('h1').html(bookName);
        $('#bookPrice').html(bookPrice);

    });


})