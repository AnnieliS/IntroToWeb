
/*Cat Look To Mouse*/
$(window).mousemove(function(evt){
    var x = evt.pageX;
    var y = evt.pageY;
    console.log(x);
    
    if (x<$(window).width()/2 - 50){
      $("#cat").attr("src","http://awiclass.monoame.com/catpic/cat_left.png");
    }else if (x>$(window).width()/2 + 50){
      $("#cat").attr("src","http://awiclass.monoame.com/catpic/cat_right.png");
    }else{
      $("#cat").attr("src","http://awiclass.monoame.com/catpic/cat_top.png");
    }
    if (x<$(window).width()/2 - 50 && y<$(window).height()/2){
      $("#cat").attr("src","http://awiclass.monoame.com/catpic/cat_lefttop.png");
    }
    if (x>$(window).width()/2 + 50 && y<$(window).height()/2){
      $("#cat").attr("src","http://awiclass.monoame.com/catpic/cat_righttop.png");
    }
    
    
  });

  /*Flashlight*/
  $(document).ready(function(){
    var fl_w = $('#flashlight').width();
    var fl_h = $('#flashlight').height();
    
    $(window).mousemove(function(e){
        var x1 = e.pageX;
        var x2 = $(window).scrollLeft();
        console.log("x2 = " + x2);
        var y = e.pageY;
        var mX = x1 - x2 - fl_w / 2;
        console.log("mX = " + mX);
        var mY = y - fl_h / 2;
        $('#flashlight').css({top: mY+"px", left: mX+"px", cursor: "none"});
    });
});