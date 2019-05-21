
/*Cat Look To Mouse*/
$(window).mousemove(function (evt) {
  var x = evt.pageX;
  var y = evt.pageY;
  console.log(x);

  if (x < $(window).width() / 2 - 50) {
    $("#cat").attr("src", "http://awiclass.monoame.com/catpic/cat_left.png");
  } else if (x > $(window).width() / 2 + 50) {
    $("#cat").attr("src", "http://awiclass.monoame.com/catpic/cat_right.png");
  } else {
    $("#cat").attr("src", "http://awiclass.monoame.com/catpic/cat_top.png");
  }
  if (x < $(window).width() / 2 - 50 && y < $(window).height() / 2) {
    $("#cat").attr("src", "http://awiclass.monoame.com/catpic/cat_lefttop.png");
  }
  if (x > $(window).width() / 2 + 50 && y < $(window).height() / 2) {
    $("#cat").attr("src", "http://awiclass.monoame.com/catpic/cat_righttop.png");
  }


});

/*Flashlight*/
$(document).ready(function () {
  var fl_w = $('#flashlight').width();
  var fl_h = $('#flashlight').height();

  $(window).mousemove(function (e) {
    var x1 = e.pageX;
    var x2 = $(window).scrollLeft();
    var y = e.pageY;
    var mX = x1 - x2 - fl_w / 2;
    var mY = y - fl_h / 2;
    $('#flashlight').css({ top: mY + "px", left: mX + "px", cursor: "none" });
  });
});


/*Arrow*/

var arrowBounce = function() {
  var arrow = $(".arrow");
  
  if (arrow.hasClass("lift")) {
    arrow.removeClass("lift");
  } else {
    arrow.addClass("lift");
  }
};

// run the arrowBounce function every 800ms
setInterval(arrowBounce, 800);

// Hide Arrow after Scroll

window.addEventListener("scroll", function(){
  var scrollPos = $(window).scrollLeft();
  console.log("pos = " + scrollPos);
if (scrollPos > 50)
{
$('.arrow').removeClass('FIanime');
$('.arrow').addClass('FOanime');
}

if (scrollPos<150){
  $('arrow').removeClass('FOanime');
  $('.arrow').addClass('FIanime');
}
});
