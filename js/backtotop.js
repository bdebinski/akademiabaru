$(document).ready(function(){
      $(window).scroll(function () {
          if ($(this).scrollTop() > 300) {
              $('#myBtn').fadeIn();
          } else {
              $('#myBtn').fadeOut();
          }
      });
      // scroll body to 0px on click
      $('#myBtn').click(function () {
          $('body,html').animate({
              scrollTop: 0
          }, 800);
          return false;
      });


  });