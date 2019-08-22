// jQuery
// =============================================================================================

// Close the navbar-collapse after clicking a link

$(function() {
  $('.nav-close').on('click', function(){
    $('.navbar-collapse').collapse('hide');
  });
})