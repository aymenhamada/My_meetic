 $(document).ready(function($) {
  $('.tab_content').hide();
  $('.tab_content:first').show();
  $('#tabs li:first').addClass('active');
  $('#tabs li').click(function(event) {
    $('#tabs li').removeClass('active');
    $(this).addClass('active');
    $('.tab_content').hide();

    var selectTab = $(this).find('a').attr("href");

    $(selectTab).fadeIn();
  });
});
  $(function() {

// Dropdown toggle
$('.dropdown-toggle').click(function(){
    $(this).next('.dropdown').toggle();
});

$(document).click(function(e) {
    var target = e.target;
    if (!$(target).is('.dropdown-toggle') && !$(target).parents().is('.dropdown-toggle')) {
        $('.dropdown').hide();
    }
});

});