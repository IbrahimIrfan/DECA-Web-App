$(document).on('ready', function() {
    $('#menu-bars').on('click', function() {
        if ($('#mobile_menu ul').css('display') == 'block') {
            $('#mobile_menu ul').css('display', 'none');
        } else {
            $('#mobile_menu ul').css('display', 'block');
        }
    });
    $('.content').on('click', function(){
      $('#mobile_menu ul').css('display', 'none');
    });
});
