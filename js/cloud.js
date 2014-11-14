if (window.matchMedia ("(min-width: 700px)").matches){	
	var position = 0;
	$("#h1").css("background-color", "red");
	function cloudEffect() {
		position += 2;
		$(".cloud").css("backgroundPosition",position+"px 0px");
	}
	setInterval("cloudEffect()",30);
}


