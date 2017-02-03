(function ($) {
  $(document).ready(function() {
  
  
  if(Modernizr.mq('only all')) {
    $('html').addClass('mq');
  } else {
    $('html').addClass('no-mq');
  };


   // Mobile Navigation Using MMenu

    $(".main-nav").clone().attr('id', 'menu-original').addClass("hidden-xs").insertBefore(".site-wrapper");
    $("#menu-original").mmenu({
      "extensions": ["theme-dark"]
    });

    // Menu Icon Toggle
    $(".hamburger-menu").click(function() {
      $(".hamburger-menu").toggleClass('close');
    });

    $('.hamburger-menu').on('click', function() {
      $('.bar').toggleClass('animate');
    });

  });
})(jQuery);