(function($){
  $( "a.effect-ajax " ).children('span').remove();

  $("a.effect-ajax").on('click',function(e){
    e.preventDefault();
    return;
  });
  $("a.effect-ajax").attr("href","#");
  $(".link-custom").remove();
})(jQuery);