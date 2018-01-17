// JavaScript Document
$( document ).ready(function() {
	$(".technicalDetails").hide();
	$(".awardsAndJudging").hide();
	$(".show").hide();
	$(".first").on("click", function() {
		$(".technicalDetails").slideToggle("slow");
	});
	$(".second").on("click", function() {
		$(".awardsAndJudging").slideToggle("slow");
	});
	
	$('form').on('submit', function() {
		var form = $(this);
		$.ajax({
			url: form.attr('action'),
			type: form.attr('method'),
			data: form.serialize(),
			success: function(response) {
				$('input').fadeOut();
				$('.show').delay(400).fadeIn()
			}
		});
		return false;
	});
});