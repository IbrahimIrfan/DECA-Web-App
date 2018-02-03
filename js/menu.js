/*
 * menu functionality for all pages
 */

$(document).on('ready', function() {
	// redirect to home
    $('#menu-logo').on('click', function(){
      window.location.href="http://www.irhsdeca.xyz";
    });

	// mobile dropdown menu funcitonality
    $('#menu-bars').on('click', function() {
        if ($('#mobile_dropdown').is(':visible')) {
            $('#mobile_dropdown').fadeOut(150);
        } else {
            $('#mobile_dropdown').fadeIn(150);
        }
    });

	// if you click off the dropdown, make it disappear
    $('.content').click(function() {
        $('#mobile_dropdown').fadeOut(150);
    });
    $('.content2').click(function() {
        $('#mobile_dropdown').fadeOut(150);
    });

	// other logo click
    $('#altlogo').click(function(){
      window.location.href="http://www.irhsdeca.xyz";
    });

	// redirect to our facebook group
    $('#fbimg').click(function(){
      window.location.href="https://www.facebook.com/groups/565646830308629/";
    });
});
