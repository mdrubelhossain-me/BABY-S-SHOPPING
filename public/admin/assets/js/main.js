$(document).ready(function(){


	$('.onmethod').on({
	mouseenter: function(){
		$(this).css('background','green')
	},
	mouseleave: function(){
		$(this).css('background','yellow')
	},
	click: function(){
		$(this).css('background','blue')
	}

});


$('.searchinputform').click(function(){
	$(this).css('background','black',1);
});


$('.click22').click(function(){
	$('.chaining').css('background','lime').slideUp(1000).slideDown(1000).hide(2000);
});









});