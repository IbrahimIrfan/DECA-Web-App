
$(document).on('ready', function(){

  $('#cssmenu').hide().delay(3000);
  $('#center-text').hide().delay(3000);
  $('#logo').hide().fadeIn(2000);
  $('#logo').animate({right: '200px'}, 1000);
  $('#center-text').fadeIn(1000);
  $('#cssmenu').fadeIn(1000);
});
