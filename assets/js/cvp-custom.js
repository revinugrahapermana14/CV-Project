// var base_url = <?php echo base_url() ?>;
// console.log(base_url)
document.addEventListener('DOMContentLoaded', function() {
	var elems = document.querySelectorAll('.sidenav');
});

  // Or with jQuery

  $(document).ready(function(){

  	$('#dekstop-carousel').owlCarousel({
  		loop:true,
  		margin: 0,
  		items: 1,
  		animateOut: 'fadeOut',
  		animateIn: 'fadeIn',
  		autoplay:true,
   		autoplayTimeout:5000,
   		nav: true,
  		navText: ["<img src='assets/icon/left-arrow.svg'>","<img src='assets/icon/right-arrow.svg'>"],
   		dots: true,
      touchDrag: false,
      mouseDrag: false
  	});

    $('#mobile-carousel').owlCarousel({
      loop:true,
      margin: 0,
      items: 1,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      autoplay: true,
      autoplayTimeout:5000,
      nav: false,
      dots: false,
      touchDrag: false,
      mouseDrag: false
    });

  	$(window).scroll(function(){
  		if ($(document).scrollTop() > 50 ) {
  			$('.fixed-materialize').addClass('scrollizer');
  		}
  		else {
  			$('.fixed-materialize').removeClass('scrollizer');
  		}
  	});

    // mobile scroll
    $(window).scroll(function(){
      if ($(document).scrollTop() > 20 ) {
        $('#navMob').addClass('groupwhite');
      }
      else {
        $('#navMob').removeClass('groupwhite');
      }
    });

  	$('.sidenav-mtr > li > a').click(function(){
  		$('.sidenav-mtr > li > a').removeClass("active");
  		$(this).addClass("active");
  	});

    $('#barOpen').click(function(){
      // sidebar
      $('.bulletSide').show().addClass('slideInLeft').removeClass('slideOutLeft');
      $('.bulletBar > img').removeClass('normalRotation').addClass('rotationImg');
      $('.bulletWrapper').find('span:first-child').addClass('toFullBar').removeClass('basicBar');
      $('.bulletWrapper').find('span:nth-child(2)').addClass('toFullBar').removeClass('basicBar');
      $('.bulletWrapper').find('span:nth-last-child(1)').addClass('toFullBar').removeClass('basicBar');
    });

    $('#barClose').click(function(){
      $('.bulletSide').addClass('slideOutLeft').removeClass('slideInLeft');
      $('.bulletBar > img').removeClass('rotationImg').addClass('normalRotation');
      $('.bulletWrapper').find('span:first-child').addClass('basicBar').removeClass('toFullBar');
      $('.bulletWrapper').find('span:nth-child(2)').addClass('basicBar').removeClass('toFullBar');
      $('.bulletWrapper').find('span:nth-last-child(1)').addClass('basicBar').removeClass('toFullBar');
    });

  });