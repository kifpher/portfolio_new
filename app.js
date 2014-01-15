$(document).ready(function(){
	var count = 0; 
	var color = 0;
	$('.graph').on("mouseenter", function () {
		$(this).find('.moving_grid').find('div:nth-child(1)').animate({'top': '40%'},600);
		$(this).find('.moving_grid').find('div:nth-child(2)').animate({'top': '35%'},600);
		$(this).find('.moving_grid').find('div:nth-child(3)').animate({'top': '25%'},600);
		$(this).find('.moving_grid').find('div:nth-child(4)').animate({'top': '20%'},600);
		$(this).find('.moving_grid').find('div:nth-child(5)').animate({'top': '15%'},600);
		$(this).find('.moving_grid').find('div:nth-child(6)').animate({'top': '11%'},600);
	});
	$('.graph').on("mouseleave", function () {
		$(this).find('.moving_grid').find('div').animate({'top': '50%'},600);
		count+= 1
		if(count>15) {
			alert("WARNING: EASTER EGG! When I was a kid... I would wake up saturday mornings to watch Ninja Turtles.");
			count = 0;
			color = 1; 
		}
		if(color >= 2) {
			$('this').addClass('easterEgg');
			color = 0;
		}
	});
	$('.button').on('click', function () {
		$(this).parent('nav').find('ul').fadeToggle();
	});
});

$(window).bind('scroll',function(e){
    parallaxScroll();

});
 
function parallaxScroll(){
    var scrolled = $(window).scrollTop();
    $('.obj1').css('top',(150+(scrolled*.25))+'px');
    $('.obj1').animate({ opacity: (1-scrolled*.2) });
    $('.obj2').css('top',(0-(scrolled*.9))+'px');
    
}