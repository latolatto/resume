if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }

$(".nav-link").on("click",function(){
    $("a.activated").removeClass("activated");
    $(this).addClass("activated");
})




