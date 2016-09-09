$(document).on('ready', function() {
    $('#menu-logo').on('click', function(){
      window.location.href="http://www.irhsdeca.com";
    });
    $('#menu-bars').on('click', function() {
        if ($('#mobile_dropdown').is(':visible')) {
            $('#mobile_dropdown').fadeOut(150);
        } else {
            $('#mobile_dropdown').fadeIn(150);
        }
    });
    $('.content').click(function() {
        $('#mobile_dropdown').fadeOut(150);
    });
    $('.content2').click(function() {
        $('#mobile_dropdown').fadeOut(150);
    });
    $('#altlogo').click(function(){
      window.location.href="http://www.irhsdeca.com";
    });
});
