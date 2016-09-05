$(document).ready(function()
{
         $(window).scroll(function()
         {
              if($('.navbar').offset().top >50)
              {
              	$('.navbar-fixed-top').addClass('topclass');
              }
              else
              {
              	$('.navbar-fixed-top').removeClass('topclass');
              }
         });
});