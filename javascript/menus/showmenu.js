$(function () {
	$('ul.parent > li').hover(function(){
		$(this).find('ul.child').show(400);
		 $(this).css('background', '#444549');
	}, function(){
		$(this).find('ul.child').hide(400);
		 $(this).css('background', '#B3ACA6');
	});
});
