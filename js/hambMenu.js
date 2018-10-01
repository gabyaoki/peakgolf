$(function(){
	$("#hambMenu").on("click", function() {
		$(".navHamb").css("top", 28);
		$("#hambMenu").css("display", "none");
		$("#hambOpen").css("display", "block");
		$("header").css("height", 285);
		$("#socialNav").css("top", 185);

		return false;
	});

	$("#closeHamb").on("click", function() {
		$(".navHamb").css("top", 60);
		$("#hambMenu").css("display", "block");
		$("#hambOpen").css("display", "none");
		$("header").css("height", 168);
		$("#socialNav").css("top", 168);

		return false;
	});

	if($(window.screen.availWidth)[0] <= 400) {
		$("#hambMenu").on("click", function() {
		$("header").css("height", 405);
		$("#socialNav").css("top", 405);

		return false;
	});

	$("#closeHamb").on("click", function() {
		$("header").css("height", 150);
		$("#socialNav").css("top", 150);
		$(".navHamb").css({
			"top": 100,
			"left": 0,
			"text-align": "center"
		});
		$(".navHamb #hambMenu").css({
			"float": "none",
			"display": "inline-block"
		});

		return false;
	});
	}
});