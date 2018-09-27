$(function() {

  size = $(this).width();

  if (size >= 993)
  $(".user-img img").removeClass("center-block");
  else
  $(".user-img img").addClass("center-block");

  $( window ).resize( function() {

    var size;

    size = $(this).width();

    if (size >= 993)
    $(".user-img img").removeClass("center-block");
    else
    $(".user-img img").addClass("center-block");

  });

});
