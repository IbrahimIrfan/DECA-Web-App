/*
 * loading screen animation for index.php
 */

$(document).on('ready', function(){
  $('#center-text').hide().delay(2000).fadeIn(1000);
  $('#logo').hide().fadeIn(1000).animate({left: '-14%'}, 1000);
  $('.footer').hide().delay(2000).fadeIn(1000);
  $('#cssmenu').hide().delay(2000).fadeIn(1000);
});
