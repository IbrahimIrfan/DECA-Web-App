$(document).on('ready', function() {
    for (var i = 1; i < 6; i++) {
      var file = "/Finance_" + x + "_Whole_Master.php";
        $.get(file, function(data) {
          console.log($(data).find("h5"));
        });
    }

});
