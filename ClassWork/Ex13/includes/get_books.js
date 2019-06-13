$(document).ready(function () {
    $.getJSON("data/books.json", function (data){

        $('h1').html(data.category);
        console.log(data.products);
        $('#books-list').append("<ul>");
        $.each(data.products, function() {

        $('#books-list ul').append("<li><a href='book.html?BookId="
        + this.id + " '>"
        + this.name + "</a></li>");

        });

    });
});

