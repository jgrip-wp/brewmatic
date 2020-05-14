$(function(){
	$('.js-qa dl dt').click(function(){
		if($(this).hasClass("on")){
			$(this).next().stop().slideUp(200);
			$(this).removeClass("on");
		}else{
			$(this).next().stop().slideDown(200);
			$(this).addClass("on");
		}
		
	});
});