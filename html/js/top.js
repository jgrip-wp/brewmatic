$(function(){
    $("#wrapper").hide();
    $(document).ready(function () {
		$("#top_logo").delay(1400).fadeOut(800, "", function(){
			$("#wrapper").delay(400).fadeIn(800 , "", function(){
				new WOW().init();
			});
		});

	});
});
	