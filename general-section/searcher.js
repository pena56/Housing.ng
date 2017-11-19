$(document).ready(function(){
	$("#searcher").on("focus", function(){
		var valu = $(this).val();

		if (valu.length<2)
			return;

		$.ajax({
			url:'email_searcher.php',
			data: {email:$(this).val()},
			type: 'post',
		}).done(function(data){
			$('#search-result').html(data);
		})
	});
})