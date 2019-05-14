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