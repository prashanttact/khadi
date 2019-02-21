// small slider java script//

  window.onload=function(){
    $slideshow = $('.slider').slick({
    dots:false,
    autoplay:false,
    arrows:true,
    vertical: true,
    prevArrow:'<button type="button" class="slick-prev"> </button>',
    nextArrow:'<button type="button" class="slick-next"></button>',
    slidesToShow:1,
    slidesToScroll:1
    });
    $('.slide').click(function() {
      $slideshow.slick('slickNext');
    });
  };