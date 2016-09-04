$(document).on('ready', function() {
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

});
