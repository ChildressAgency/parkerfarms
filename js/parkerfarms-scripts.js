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

});