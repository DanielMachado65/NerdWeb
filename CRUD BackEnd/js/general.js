$(function() {

  var menu = false;
  var size = $(window).width();

  $(window).resize(function() { // Resize do navegador para continuar responsivo
    size = $(window).width();

    if (size > 768 && menu == false)
    $(".side-menu a").css({visibility: "hidden"});

    if (menu == true && size < 768)
    $(".side-menu").css({width: "100%"});
    else if (menu == true && size > 768)
    $(".side-menu").css({width: "20%", borderTop: "1px solid #ddd"});

  });

  $(".hamburger").click(function() { // Toggle do menu
    $( this ).toggleClass( "make-x" );
  });

  $(".hamburger").on("click", function() { // Controle do side-menu

    menu = !menu;

    if (menu == true && size < 768) {
      $(".side-menu").css({width: "100%", borderTop: "none"});
      $(".side-menu a").css({visibility: "visible"});
      $(".blur-div").css({width: "100%"});
    } else if (menu == true && size > 768) {

      $(".side-menu").css({width: "20%", borderTop: "1px solid #ddd"});

      setTimeout(function(){
        $(".side-menu a").css({visibility: "visible"});
      }, 300);

    } else if (menu == false && size > 768) {
      $(".side-menu a").css({visibility: "hidden"});

      setTimeout(function(){
        $(".side-menu").css({width: "0%"});
      }, 200);

    } else if (menu == false && size < 768) {
      $(".side-menu").css({width: "0%"});
      $(".blur-div").css({width: "0%"});
    }

  });

  $(".img-a").hover( function() {
      $(".img-a img").css({border: "2px solid #fff", boxShadow: "0px 0px 2px rgba(255, 255, 255, .5)"});
      $(".user-name").css({color: "#fff"});
    }, function() {
      $(".img-a img").css({border: "2px solid #d4d4d4", boxShadow: "none"});
      $(".user-name").css({color: "#d4d4d4"});
    }
  );

  $(".user-name").hover( function() {
      $(".img-a img").css({border: "2px solid #fff", boxShadow: "0px 0px 2px rgba(255, 255, 255, .5)"});
      $(".user-name").css({color: "#fff"});
    }, function() {
      $(".img-a img").css({border: "2px solid #d4d4d4", boxShadow: "none"});
      $(".user-name").css({color: "#d4d4d4"});
    }
  );

})
