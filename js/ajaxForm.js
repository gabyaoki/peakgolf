$(function(){
	$("#submitForm").on("click", function(){
		$validation = validateForm();
		if($validation == true)
		{
			$.ajax(
			{	
				url: "models/saveContact.php",
				method: "POST",	
				data: 
				{
					strName: $("#name").val(),
					strEmail: $("#email").val(),
					strPhone: $("#phone").val(),
					nOccasionID: $("#ocasion").val(),
					strMessage: $("#description").val()
				},				
				success: function(result)
				{
					$(".alertMsg").css({
						display: "block",
						backgroundColor: "#7f4350"
					}).html('Thank you! See you soon.');;
					$("#contactForm")[0].reset();
				},
				error: function(result)
				{
					$(".alertMsg").css({
						display: "block",
						backgroundColor: "#000"
					}).html('Sorry! Please try later again.');
				}
			});
		}
	return false;
	});

	$("#submitBt").on("click", function(){
		$validation = validateForm();
		if($validation == true)
		{
			$.ajax(
			{	
				url: "models/saveContact.php",
				method: "POST",	
				data: 
				{
					strName: $("#nameR").val(),
					strEmail: $("#emailR").val(),
					strPhone: $("#phoneR").val(),
					nOccasionID: $("#ocasionR").val(),
					strMessage: $("#descriptionR").val(),
					dateEvent: $("#dateR").val(),
					nGuests: $("#guestsR").val()
				},				
				success: function(result)
				{
					$(".alertMsg").css({
						display: "block",
						backgroundColor: "#7f4350"
					}).html('Thank you! See you soon.');;
					$("#reserveForm")[0].reset();
				},
				error: function(result)
				{
					$(".alertMsg").css({
						display: "block",
						backgroundColor: "#000"
					}).html('Sorry! Please try later again.');
				}
			});
		}
	return false;
	});
});