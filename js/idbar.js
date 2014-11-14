$(document).ready(function(){
	/************************\
			connection
	\************************/		
	$("#connect").click(function(){
		$("#co").fadeIn();
		$("#connection").fadeIn();
		$("#cre").fadeOut();
		$("#creation").fadeOut();
	});

	$("#co").click(function(event){
		$("#co").fadeOut();
		$("#connection").fadeOut();

	});
	/************************\
			connection
	\************************/	
	/************************\
		creation de compte
	\************************/	

	$("#create").click(function(){
		$("#cre").fadeIn();
		$("#creation").fadeIn();
		$("#co").fadeOut();
		$("#connection").fadeOut();
	});

	$("#cre").click(function(){
		$("#cre").fadeOut();
		$("#creation").fadeOut();
	});
	/************************\
		creation de compte
	\************************/	
	
});