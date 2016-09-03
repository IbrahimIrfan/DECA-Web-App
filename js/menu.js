$(document).on('ready', function() {
    $('#menu-bars').on('click', function() {
        if ($('#mobile_dropdown').css('display') == 'block') {
            $('#mobile_dropdown').css('display', 'none');
        } else {
            $('#mobile_dropdown').css('display', 'block');
        }
    });
    $('.content').on('click', function(){
      $('#mobile_dropdown').css('display', 'none');
    });
});
