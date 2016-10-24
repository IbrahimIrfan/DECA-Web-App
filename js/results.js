$('#submitEvent').on('click', function(){
  $.get("/js/ftdm.txt", function(data) {
    var line = data.split(" ");

    var scores = []

    var eventName = $('#eventInput').val();

    for (i = 0; i < line.length; i++){
        if (line[i].toUpperCase() == eventName.toUpperCase()){
            if (line[i+6] == 'Hamilton' || line[i+5] == 'Hamilton'){
                if (parseInt(line[i+1]) > 15){
                    scores.push([parseInt(line[i+1]) + parseInt(line[i+2]), parseInt(line[i+1]), parseInt(line[i+2]), line[i]]);
                }else{
                    scores.push([parseInt(line[i+2]) + parseInt(line[i+3]), parseInt(line[i+2]), parseInt(line[i+3]), line[i]]);
                  }
                }
        }
    }
    scores.sort();

    for (i = scores.length - 1; i > -1; i--){
      $('#resultsTable').append('<tr>' + '<td>' + scores[i][0] + '</td>' + '<td>' + scores[i][1] + '</td>' + '<td>' + scores[i][2] + '</td>' + '</tr>');
      console.log(scores[i]);
    }
  });
});
