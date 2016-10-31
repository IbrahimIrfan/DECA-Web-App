$(document).on('ready', function() {
    for (var i = 1; i < 6; i++) {
        var file = "/Finance_" + i + "_Whole_Master.php";
        $.get(file, function(data) {
            for (var j = 1; j < 100; j++){
              console.log($(data).find("#q" + j).html());
                console.log($(data).find("#_" + j + " option").html());
                console.log($(data).find("#" + j + "answer h5").html());
          }
        });
    }
});
