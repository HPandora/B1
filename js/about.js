$(document).ready(function(){

	$("#miniature").click(function(){
		$('#zoom').fadeIn();
//		$('#zoom').html($(this).clone());
	});

	$("#zoom").click(function(){
		
		$('#zoom').fadeOut();
	});
});