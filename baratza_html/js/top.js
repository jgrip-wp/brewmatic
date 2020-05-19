$(document).ready(function(){
	if ($('.biggerlink').length > 0) {
		$('.biggerlink').biggerlink();
	}
	if($(window).width() < 768){
		$('.meet_box').slick({
			autoplay: true,
	    autoplaySpeed: 3000,
	    speed: 800,
	    dots: false,
	    arrows: false,
	    lazyLoad: 'ondemand',
	    pauseOnHover: true,
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    swipe: true,
	    centerMode: true,
	    centerPadding: 0,
	    vertical: false,
	    variableWidth: true,
		})
		/*$('.meet_box_item.slick-current').addClass('animate_scale');
    $('.meet_box').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        //data-slick-index
        var currentslider = $('.meet_box_item[data-slick-index='+currentSlide+']')
        var afterslider = $('.meet_box_item[data-slick-index='+(nextSlide)+']')
        // console.log(currentSlide)
        // console.log(nextSlide)
        setTimeout(function(){
            currentslider.removeClass('animate_scale')
            afterslider.addClass('animate_scale')
        }, 100)
    });*/
	}
});


