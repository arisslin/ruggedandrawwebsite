// Vanilla JS
// =============================================================================================

// Smooth scrolling

$(document).ready(function () {
	$('a.smooth').on('click', function (event) {
		if (this.hash !== "") {
			event.preventDefault();
			var hash = this.hash;
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 800, function () {
				window.location.hash = hash;
			});
		}
	});
});

// jQuery
// =============================================================================================

// Close the navbar-collapse after clicking a link

$(function() {
  $('.nav-close').on('click', function(){
    $('.navbar-collapse').collapse('hide');
  });
})