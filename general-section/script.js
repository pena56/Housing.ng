$( document ).ready(function() {
	$("#username").on("blur", function(){
		$.ajax({
			url:'emailChecker.php',
			data: {username:$(this).val()},
			type: 'post',
		}).done(function(data){
			$('#username-msg').html(data);
		})
	});
});