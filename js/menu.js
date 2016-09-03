$(document).on('ready', function() {
    $('#menu-bars').on('click', function() {
        if ($('#mobile_dropdown').is(':visible') {
            $('#mobile_dropdown').fadeOut(250);
        } else
            $('#mobile_dropdown').fadeIn(250);
        }
    });
    $('.content').on('click', function(){
        $('#mobile_dropdown').fadeOut(250);
    });
});
