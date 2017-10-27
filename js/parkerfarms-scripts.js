jQuery(document).ready(function($){
  
  $('.timeline-wrapper').on('scroll', function(){
    var st = $(this).scrollTop();
    $('.fademe').each(function(){
      //console.log($(this).position());

      if($(this).position().top < 150){
          //$(this).animate({opacity : 1});
          $(this).addClass('fade-zero');
          $(this).removeClass('fade-one');
          $(this).removeClass('fade-two');
      }
      else if($(this).position().top < 400){
        //$(this).animate({opacity : .66});
        $(this).addClass('fade-one');
        $(this).removeClass('fade-two');
      }
      else{
        //$(this).animate({opacity : .33});
        $(this).addClass('fade-two');
      }
    });
  });

  $(window).on('scroll', function(){
    $('.fade').each(function(){
      var bottom_of_row = $(this).position().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height() - 150;

      if(bottom_of_window > bottom_of_row){
        $(this).addClass('fadein');
        //$(this).animate({'opacity':'1'}, 3000);
      }
      else{
        $(this).removeClass('fadein');
        //$(this).animate({'opacity':'.3'}, 3000);
      }
    });
  });

});