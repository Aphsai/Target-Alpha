// JavaScript Document	
$( document ).ready(function() {
	$(".handle").on("click", function() {
		$("nav ul").toggleClass("showing");
	});
	var elementPosition = $('#header_nav').offset();
	$(window).scroll(function () {
		if($("body").scrollTop() + window.innerHeight + $("#header_nav").height() < $(document).height()) {
		  if ($("body").scrollTop() > elementPosition.top) {
			  $('#header_nav').css('position', 'fixed').css('top', '0');
			  $('#header_nav').addClass('fadeIn');
		  } else {
			  $('#header_nav').css('position', 'static');
			  $('#header_nav').removeClass('fadeIn');
		  }
		}
	});
});