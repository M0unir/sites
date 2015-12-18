

$(document).ready(function() {

  // Artist Single Image Preview & SrollTop
  $("figure#related a img").click(function(e){
      e.preventDefault();
      var myimg = $(this).attr("src");
      $("img#preview").attr("src", $(this).attr("src"));

      $('html, body').animate({
          scrollTop: $( '#artist-preview' ).offset().top
      }, 500);

      return false;

  })


  //About Sidebar Animation

    $('.sidebar ul li a').on('click', function(e){
      e.preventDefault();
      var sectionID = $(this).attr('href');
      $(sectionID).fadeIn(500).siblings().hide();

  });
  var slideWidth = $('#slider ul li').width();


  $('button#load').on('click', function(){
    $('#gallery-row').toggleClass('loaded');

  });

  $("button[data-theme]").click(function() {
      var myvari = $("head link#theme").attr("href", $(this).data("theme"));
      console.log(myvari);
  })

});
