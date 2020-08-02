jQuery(document).ready(rowtoslider);
jQuery(document).resize(rowtoslider);

function rowtoslider ( $ ){// makes sure the whole site is loaded
  var col_lg = 960;
 if($(window).width() <= col_lg){
  jQuery('.row-mobile-slide').wrap('<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel"></div>');
  jQuery('.row-mobile-slide').addClass('carousel-inner');
  jQuery('.row-mobile-slide > *').wrap('<div class="carousel-item"></div>');
  jQuery('.row-mobile-slide div:first-child').addClass('active');
 }};

jQuery(document).ready(function( $ ){
$('.carousel').carousel({
  interval: 2000
})
  })
